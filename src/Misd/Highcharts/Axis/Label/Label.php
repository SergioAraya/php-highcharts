<?php

/*
 * This file is part of the PHP Highcharts library.
 *
 * (c) University of Cambridge
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Misd\Highcharts\Axis\Label;

use Misd\Highcharts\Exception\InvalidArgumentException;
use Zend\Json\Expr;

/**
 * Axis label.
 *
 * @author Chris Wilkinson <chris.wilkinson@admin.cam.ac.uk>
 */
class Label implements LabelInterface
{
    /**
     * Is enabled.
     *
     * @var bool
     */
    protected $enabled = true;

    /**
     * {@inheritdoc}
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * {@inheritdoc}
     */
    public function setEnabled($enabled = true)
    {
        if (false === is_bool($enabled)) {
            throw new InvalidArgumentException();
        }

        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Alignment.
     *
     * @var string
     */
    protected $align;

    /**
     * {@inheritdoc}
     */
    public function getAlign()
    {
        return $this->align;
    }

    /**
     * {@inheritdoc}
     */
    public function setAlign($align)
    {
        if (false === is_string($align) && false === is_null($align)) {
            throw new InvalidArgumentException();
        }

        $this->align = $align;

        return $this;
    }

    /**
     * Styles.
     *
     * @var array
     */
    protected $styles = array();

    /**
     * {@inheritdoc}
     */
    public function getStyle($key)
    {
        return array_key_exists($key, $this->styles) ? $this->styles[$key] : null;
    }

    /**
     * {@inheritdoc}
     */
    public function getStyles()
    {
        return $this->styles;
    }

    /**
     * {@inheritdoc}
     */
    public function setStyle($key, $value)
    {
        $this->styles[$key] = $value;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setStyles(array $styles)
    {
        $this->styles = $styles;

        return $this;
    }

    /**
     * X-offset.
     *
     * @var int|null
     */
    protected $xOffset;

    /**
     * {@inheritdoc}
     */
    public function getXOffset()
    {
        return $this->xOffset;
    }

    /**
     * {@inheritdoc}
     */
    public function setXOffset($xOffset)
    {
        if (false === is_int($xOffset) && false === is_null($xOffset)) {
            throw new InvalidArgumentException();
        }

        $this->xOffset = $xOffset;

        return $this;
    }

    /**
     * Y-offset.
     *
     * @var int|null
     */
    protected $yOffset;

    /**
     * {@inheritdoc}
     */
    public function getYOffset()
    {
        return $this->yOffset;
    }

    /**
     * {@inheritdoc}
     */
    public function setYOffset($yOffset)
    {
        if (false === is_int($yOffset) && false === is_null($yOffset)) {
            throw new InvalidArgumentException();
        }

        $this->yOffset = $yOffset;

        return $this;
    }

    /**
     * Formatter.
     *
     * @var Expr|null
     */
    protected $formatter;

    /**
     * {@inheritdoc}
     */
    public function getFormatter()
    {
        return $this->formatter;
    }

    /**
     * {@inheritdoc}
     */
    public function setFormatter($formatter)
    {
        if (false === $formatter instanceof Expr && false === is_null($formatter)) {
            throw new InvalidArgumentException();
        }

        $this->formatter = $formatter;

        return $this;
    }
}