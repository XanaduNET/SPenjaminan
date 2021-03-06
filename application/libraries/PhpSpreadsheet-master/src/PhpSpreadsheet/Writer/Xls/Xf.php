<?php

namespace PhpOffice\PhpSpreadsheet\Writer\Xls;

use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Borders;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Protection;
use PhpOffice\PhpSpreadsheet\Style\Style;

// Original file header of PEAR::Spreadsheet_Excel_Writer_Format (used as the base for this class):
// -----------------------------------------------------------------------------------------
// /*
// *  Module written/ported by Xavier Noguer <xnoguer@rezebra.com>
// *
// *  The majority of this is _NOT_ my code.  I simply ported it from the
// *  PERL Spreadsheet::WriteExcel module.
// *
// *  The author of the Spreadsheet::WriteExcel module is John McNamara
// *  <jmcnamara@cpan.org>
// *
// *  I _DO_ maintain this code, and John McNamara has nothing to do with the
// *  porting of this code to PHP.  Any questions directly related to this
// *  class library should be directed to me.
// *
// *  License Information:
// *
// *    Spreadsheet_Excel_Writer:  A library for generating Excel Spreadsheets
// *    Copyright (c) 2002-2003 Xavier Noguer xnoguer@rezebra.com
// *
// *    This library is free software; you can redistribute it and/or
// *    modify it under the terms of the GNU Lesser General Public
// *    License as published by the Free Software Foundation; either
// *    version 2.1 of the License, or (at your option) any later version.
// *
// *    This library is distributed in the hope that it will be useful,
// *    but WITHOUT ANY WARRANTY; without even the implied warranty of
// *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
// *    Lesser General Public License for more details.
// *
// *    You should have received a copy of the GNU Lesser General Public
// *    License along with this library; if not, write to the Free Software
// *    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
// */
class Xf
{
    /**
     * Style XF or a cell XF ?
     *
     * @var bool
     */
    private $isStyleXf;

    /**
     * Index to the FONT record. Index 4 does not exist.
     *
     * @var int
     */
    private $fontIndex;

    /**
     * An index (2 bytes) to a FORMAT record (number format).
     *
     * @var int
     */
    private $numberFormatIndex;

    /**
     * 1 bit, apparently not used.
     *
     * @var int
     */
    private $textJustLast;

    /**
     * The cell's foreground color.
     *
     * @var int
     */
    private $foregroundColor;

    /**
     * The cell's background color.
     *
     * @var int
     */
    private $backgroundColor;

    /**
     * Color of the bottom border of the cell.
     *
     * @var int
     */
    private $bottomBorderColor;

    /**
     * Color of the top border of the cell.
     *
     * @var int
     */
    private $topBorderColor;

    /**
     * Color of the left border of the cell.
     *
     * @var int
     */
    private $leftBorderColor;

    /**
     * Color of the right border of the cell.
     *
     * @var int
     */
    private $rightBorderColor;

    /**
     * @var int
     */
    private $diag;

    /**
     * @var int
     */
    private $diagColor;

    /**
     * @var Style
     */
    private $style;

    /**
     * Constructor.
     *
     * @param Style $style The XF format
     */
    public function __construct(Style $style)
    {
        $this->isStyleXf = false;
        $this->fontIndex = 0;

        $this->numberFormatIndex = 0;

        $this->textJustLast = 0;

        $this->foregroundColor = 0x40;
        $this->backgroundColor = 0x41;

        $this->diag = 0;

        $this->bottomBorderColor = 0x40;
        $this->topBorderColor = 0x40;
        $this->leftBorderColor = 0x40;
        $this->rightBorderColor = 0x40;
        $this->diagColor = 0x40;
        $this->style = $style;
    }

    /**
     * Generate an Excel BIFF XF record (style or cell).
     *
     * @return string The XF record
     */
    public function writeXf()
    {
        // Set the type of the XF record and some of the attributes.
        if ($this->isStyleXf) {
            $style = 0xFFF5;
        } else {
            $style = self::mapLocked($this->style->getProtection()->getLocked());
            $style |= self::mapHidden($this->style->getProtection()->getHidden()) << 1;
        }

        // Flags to indicate if attributes have been set.
        $atr_num = ($this->numberFormatIndex != 0) ? 1 : 0;
        $atr_fnt = ($this->fontIndex != 0) ? 1 : 0;
        $atr_alc = ((int) $this->style->getAlignment()->getWrapText()) ? 1 : 0;
        $atr_bdr = (self::mapBorderStyle($this->style->getBorders()->getBottom()->getBorderStyle()) ||
            self::mapBorderStyle($this->style->getBorders()->getTop()->getBorderStyle()) ||
            self::mapBorderStyle($this->style->getBorders()->getLeft()->getBorderStyle()) ||
            self::mapBorderStyle($this->style->getBorders()->getRight()->getBorderStyle())) ? 1 : 0;
        $atr_pat = ($this->foregroundColor != 0x40) ? 1 : 0;
        $atr_pat = ($this->backgroundColor != 0x41) ? 1 : $atr_pat;
        $atr_pat = self::mapFillType($this->style->getFill()->getFillType()) ? 1 : $atr_pat;
        $atr_prot = self::mapLocked($this->style->getProtection()->getLocked())
            | self::mapHidden($this->style->getProtection()->getHidden());

        // Zero the default border colour if the border has not been set.
        if (self::mapBorderStyle($this->style->getBorders()->getBottom()->getBorderStyle()) == 0) {
            $this->bottomBorderColor = 0;
        }
        if (self::mapBorderStyle($this->style->getBorders()->getTop()->getBorderStyle()) == 0) {
            $this->topBorderColor = 0;
        }
        if (self::mapBorderStyle($this->style->getBorders()->getRight()->getBorderStyle()) == 0) {
            $this->rightBorderColor = 0;
        }
        if (self::mapBorderStyle($this->style->getBorders()->getLeft()->getBorderStyle()) == 0) {
            $this->leftBorderColor = 0;
        }
        if (self::mapBorderStyle($this->style->getBorders()->getDiagonal()->getBorderStyle()) == 0) {
            $this->diagColor = 0;
        }

        $record = 0x00E0; // Record identifier
        $length = 0x0014; // Number of bytes to follow

        $ifnt = $this->fontIndex; // Index to FONT record
        $ifmt = $this->numberFormatIndex; // Index to FORMAT record

        $align = $this->mapHAlign($this->style->getAlignment()->getHorizontal()); // Alignment
        $align |= (int) $this->style->getAlignment()->getWrapText() << 3;
        $align |= self::mapVAlign($this->style->getAlignment()->getVertical()) << 4;
        $align |= $this->textJustLast << 7;

        $used_attrib = $atr_num << 2;
        $used_attrib |= $atr_fnt << 3;
        $used_attrib |= $atr_alc << 4;
        $used_attrib |= $atr_bdr << 5;
        $used_attrib |= $atr_pat << 6;
        $used_attrib |= $atr_prot << 7;

        $icv = $this->foregroundColor; // fg and bg pattern colors
        $icv |= $this->backgroundColor << 7;

        $border1 = self::mapBorderStyle($this->style->getBorders()->getLeft()->getBorderStyle()); // Border line style and color
        $border1 |= self::mapBorderStyle($this->style->getBorders()->getRight()->getBorderStyle()) << 4;
        $border1 |= self::mapBorderStyle($this->style->getBorders()->getTop()->getBorderStyle()) << 8;
        $border1 |= self::mapBorderStyle($this->style->getBorders()->getBottom()->getBorderStyle()) << 12;
        $border1 |= $this->leftBorderColor << 16;
        $border1 |= $this->rightBorderColor << 23;

        $diagonalDirection = $this->style->getBorders()->getDiagonalDirection();
        $diag_tl_to_rb = $diagonalDirection == Borders::DIAGONAL_BOTH
            || $diagonalDirection == Borders::DIAGONAL_DOWN;
        $diag_tr_to_lb = $diagonalDirection == Borders::DIAGONAL_BOTH
            || $diagonalDirection == Borders::DIAGONAL_UP;
        $border1 |= $diag_tl_to_rb << 30;
        $border1 |= $diag_tr_to_lb << 31;

        $border2 = $this->topBorderColor; // Border color
        $border2 |= $this->bottomBorderColor << 7;
        $border2 |= $this->diagColor << 14;
        $border2 |= self::mapBorderStyle($this->style->getBorders()->getDiagonal()->getBorderStyle()) << 21;
        $border2 |= self::mapFillType($this->style->getFill()->getFillType()) << 26;

        $header = pack('vv', $record, $length);

        //BIFF8 options: identation, shrinkToFit and  text direction
        $biff8_options = $this->style->getAlignment()->getIndent();
        $biff8_options |= (int) $this->style->getAlignment()->getShrinkToFit() << 4;

        $data = pack('vvvC', $ifnt, $ifmt, $style, $align);
        $data .= pack('CCC', self::mapTextRotation($this->style->getAlignment()->getTextRotation()), $biff8_options, $used_attrib);
        $data .= pack('VVv', $border1, $border2, $icv);

        return $header . $data;
    }

    /**
     * Is this a style XF ?
     *
     * @param bool $value
     */
    public function setIsStyleXf($value): void
    {
        $this->isStyleXf = $value;
    }

    /**
     * Sets the cell's bottom border color.
     *
     * @param int $colorIndex Color index
     */
    public function setBottomColor($colorIndex): void
    {
        $this->bottomBorderColor = $colorIndex;
    }

    /**
     * Sets the cell's top border color.
     *
     * @param int $colorIndex Color index
     */
    public function setTopColor($colorIndex): void
    {
        $this->topBorderColor = $colorIndex;
    }

    /**
     * Sets the cell's left border color.
     *
     * @param int $colorIndex Color index
     */
    public function setLeftColor($colorIndex): void
    {
        $this->leftBorderColor = $colorIndex;
    }

    /**
     * Sets the cell's right border color.
     *
     * @param int $colorIndex Color index
     */
    public function setRightColor($colorIndex): void
    {
        $this->rightBorderColor = $colorIndex;
    }

    /**
     * Sets the cell's diagonal border color.
     *
     * @param int $colorIndex Color index
     */
    public function setDiagColor($colorIndex): void
    {
        $this->diagColor = $colorIndex;
    }

    /**
     * Sets the cell's foreground color.
     *
     * @param int $colorIndex Color index
     */
    public function setFgColor($colorIndex): void
    {
        $this->foregroundColor = $colorIndex;
    }

    /**
     * Sets the cell's background color.
     *
     * @param int $colorIndex Color index
     */
    public function setBgColor($colorIndex): void
    {
        $this->backgroundColor = $colorIndex;
    }

    /**
     * Sets the index to the number format record
     * It can be date, time, currency, etc...
     *
     * @param int $numberFormatIndex Index to format record
     */
    public function setNumberFormatIndex($numberFormatIndex): void
    {
        $this->numberFormatIndex = $numberFormatIndex;
    }

    /**
     * Set the font index.
     *
     * @param int $value Font index, note that value 4 does not exist
     */
    public function setFontIndex($value): void
    {
        $this->fontIndex = $value;
    }

    /**
     * Map of BIFF2-BIFF8 codes for border styles.
     *
     * @var int[]
     */
    private static $mapBorderStyles = [
        Border::BORDER_NONE => 0x00,
        Border::BORDER_THIN => 0x01,
        Border::BORDER_MEDIUM => 0x02,
        Border::BORDER_DASHED => 0x03,
        Border::BORDER_DOTTED => 0x04,
        Border::BORDER_THICK => 0x05,
        Border::BORDER_DOUBLE => 0x06,
        Border::BORDER_HAIR => 0x07,
        Border::BORDER_MEDIUMDASHED => 0x08,
        Border::BORDER_DASHDOT => 0x09,
        Border::BORDER_MEDIUMDASHDOT => 0x0A,
        Border::BORDER_DASHDOTDOT => 0x0B,
        Border::BORDER_MEDIUMDASHDOTDOT => 0x0C,
        Border::BORDER_SLANTDASHDOT => 0x0D,
    ];

    /**
     * Map border style.
     *
     * @param string $borderStyle
     *
     * @return int
     */
    private static function mapBorderStyle($borderStyle)
    {
        return self::$mapBorderStyles[$borderStyle] ?? 0;
    }

    /**
     * Map of BIFF2-BIFF8 codes for fill types.
     *
     * @var int[]
     */
    private static $mapFillTypes = [
        Fill::FILL_NONE => 0x00,
        Fill::FILL_SOLID => 0x01,
        Fill::FILL_PATTERN_MEDIUMGRAY => 0x02,
        Fill::FILL_PATTERN_DARKGRAY => 0x03,
        Fill::FILL_PATTERN_LIGHTGRAY => 0x04,
        Fill::FILL_PATTERN_DARKHORIZONTAL => 0x05,
        Fill::FILL_PATTERN_DARKVERTICAL => 0x06,
        Fill::FILL_PATTERN_DARKDOWN => 0x07,
        Fill::FILL_PATTERN_DARKUP => 0x08,
        Fill::FILL_PATTERN_DARKGRID => 0x09,
        Fill::FILL_PATTERN_DARKTRELLIS => 0x0A,
        Fill::FILL_PATTERN_LIGHTHORIZONTAL => 0x0B,
        Fill::FILL_PATTERN_LIGHTVERTICAL => 0x0C,
        Fill::FILL_PATTERN_LIGHTDOWN => 0x0D,
        Fill::FILL_PATTERN_LIGHTUP => 0x0E,
        Fill::FILL_PATTERN_LIGHTGRID => 0x0F,
        Fill::FILL_PATTERN_LIGHTTRELLIS => 0x10,
        Fill::FILL_PATTERN_GRAY125 => 0x11,
        Fill::FILL_PATTERN_GRAY0625 => 0x12,
        Fill::FILL_GRADIENT_LINEAR => 0x00, // does not exist in BIFF8
        Fill::FILL_GRADIENT_PATH => 0x00, // does not exist in BIFF8
    ];

    /**
     * Map fill type.
     *
     * @param string $fillType
     *
     * @return int
     */
    private static function mapFillType($fillType)
    {
        return self::$mapFillTypes[$fillType] ?? 0;
    }

    /**
     * Map of BIFF2-BIFF8 codes for horizontal alignment.
     *
     * @var int[]
     */
    private static $mapHAlignments = [
        Alignment::HORIZONTAL_GENERAL => 0,
        Alignment::HORIZONTAL_LEFT => 1,
        Alignment::HORIZONTAL_CENTER => 2,
        Alignment::HORIZONTAL_RIGHT => 3,
        Alignment::HORIZONTAL_FILL => 4,
        Alignment::HORIZONTAL_JUSTIFY => 5,
        Alignment::HORIZONTAL_CENTER_CONTINUOUS => 6,
    ];

    /**
     * Map to BIFF2-BIFF8 codes for horizontal alignment.
     *
     * @param string $hAlign
     *
     * @return int
     */
    private function mapHAlign($hAlign)
    {
        return self::$mapHAlignments[$hAlign] ?? 0;
    }

    /**
     * Map of BIFF2-BIFF8 codes for vertical alignment.
     *
     * @var int[]
     */
    private static $mapVAlignments = [
        Alignment::VERTICAL_TOP => 0,
        Alignment::VERTICAL_CENTER => 1,
        Alignment::VERTICAL_BOTTOM => 2,
        Alignment::VERTICAL_JUSTIFY => 3,
    ];

    /**
     * Map to BIFF2-BIFF8 codes for vertical alignment.
     *
     * @param string $vAlign
     *
     * @return int
     */
    private static function mapVAlign($vAlign)
    {
        return self::$mapVAlignments[$vAlign] ?? 2;
    }

    /**
     * Map to BIFF8 codes for text rotation angle.
     *
     * @param int $textRotation
     *
     * @return int
     */
    private static function mapTextRotation($textRotation)
    {
        if ($textRotation >= 0) {
            return $textRotation;
        }
        if ($textRotation == Alignment::TEXTROTATION_STACK_PHPSPREADSHEET) {
            return Alignment::TEXTROTATION_STACK_EXCEL;
        }

        return 90 - $textRotation;
    }

    private const LOCK_ARRAY = [
        Protection::PROTECTION_INHERIT => 1,
        Protection::PROTECTION_PROTECTED => 1,
        Protection::PROTECTION_UNPROTECTED => 0,
    ];

    /**
     * Map locked values.
     *
     * @param string $locked
     *
     * @return int
     */
    private static function mapLocked($locked)
    {
        return array_key_exists($locked, self::LOCK_ARRAY) ? self::LOCK_ARRAY[$locked] : 1;
    }

    private const HIDDEN_ARRAY = [
        Protection::PROTECTION_INHERIT => 0,
        Protection::PROTECTION_PROTECTED => 1,
        Protection::PROTECTION_UNPROTECTED => 0,
    ];

    /**
     * Map hidden.
     *
     * @param string $hidden
     *
     * @return int
     */
    private static function mapHidden($hidden)
    {
        return array_key_exists($hidden, self::HIDDEN_ARRAY) ? self::HIDDEN_ARRAY[$hidden] : 0;
    }
}
