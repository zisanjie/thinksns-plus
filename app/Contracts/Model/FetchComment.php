<?php

/*
 * +----------------------------------------------------------------------+
 * |                          ThinkSNS Plus                               |
 * +----------------------------------------------------------------------+
 * | Copyright (c) 2017 Chengdu ZhiYiChuangXiang Technology Co., Ltd.     |
 * +----------------------------------------------------------------------+
 * | This source file is subject to version 2.0 of the Apache license,    |
 * | that is bundled with this package in the file LICENSE, and is        |
 * | available through the world-wide-web at the following url:           |
 * | http://www.apache.org/licenses/LICENSE-2.0.html                      |
 * +----------------------------------------------------------------------+
 * | Author: Slim Kit Group <master@zhiyicx.com>                          |
 * | Homepage: www.thinksns.com                                           |
 * +----------------------------------------------------------------------+
 */

namespace Zhiyi\Plus\Contracts\Model;

interface FetchComment
{
    /**
     * Get comment centent.
     *
     * @return string
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function getCommentContentAttribute(): string;

    /**
     * Get target source display title.
     *
     * @return string
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function getTargetTitleAttribute(): string;

    /**
     * Get target source image file with ID.
     *
     * @return int
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function getTargetImageAttribute(): int;

    /**
     * Get target source id.
     *
     * @return int
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function getTargetIdAttribute(): int;
}
