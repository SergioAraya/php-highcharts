<?php

/*
 * This file is part of the PHP Highcharts library.
 *
 * (c) University of Cambridge
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Misd\Highcharts\Axis;

use Misd\Highcharts\Axis\Label\LabelInterface;
use Misd\Highcharts\Axis\Title\TitleInterface;
use Misd\Highcharts\Exception\InvalidArgumentException;

/**
 * Axis.
 *
 * Do not implement this directly, use `XAxisInterface` and `YAxisInterface` as
 * appropriate.
 *
 * @author Chris Wilkinson <chris.wilkinson@admin.cam.ac.uk>
 */
interface AxisInterface
{
    /**
     * Gets the title.
     *
     * @return TitleInterface Title.
     */
    public function getTitle();

    /**
     * Gets the labels.
     *
     * @return LabelInterface Labels.
     */
    public function getLabel();

    /**
     * Gets a category;
     *
     * @param string $id ID.
     *
     * @return string|null Category name, or `null` if not set.
     */
    public function getCategory($id);

    /**
     * Gets the categories;
     *
     * @return array Categories.
     */
    public function getCategories();

    /**
     * Adds a category.
     *
     * @param string $id   ID.
     * @param string $name Name.
     *
     * @return self Reference to the axis.
     */
    public function addCategory($id, $name);

    /**
     * Adds categories.
     *
     * @param array $categories Categories.
     *
     * @return self Reference to the axis.
     */
    public function addCategories(array $categories);

    public function isOpposite();

    public function setOpposite($opposite = true);

    public function isShowFirstLabel();

    public function setShowFirstLabel($showFirstLabel = true);

    public function isShowLastLabel();

    public function setShowLastLabel($showLastLabel = true);

    /**
     * Gets the tick width.
     *
     * @return int Tick width.
     */
    public function getTickWidth();

    /**
     * Sets the tick width.
     *
     * @param int $tickWidth Tick width.
     *
     * @return self Reference to the axis.
     *
     * @throws InvalidArgumentException If an argument is invalid.
     */
    public function setTickWidth($tickWidth);

    /**
     * Gets the grid line width.
     *
     * @return int Grid line width.
     */
    public function getGridLineWidth();

    /**
     * Sets the grid line width.
     *
     * @param int $gridLineWidth Grid line width.
     *
     * @return self Reference to the axis.
     *
     * @throws InvalidArgumentException If an argument is invalid.
     */
    public function setGridLineWidth($gridLineWidth);
}
