<?php

/*
 * The MIT License
 *
 * Copyright 2022 gmarz.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the 'Software'), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
return [
    'nextActive' => '<li class="page-item next"><a class="page-link" rel="next" href="{{url}}">{{text}}</a></li>',
    'nextDisabled' => '<li class="page-item next disabled"><a class="page-link" href="" onclick="return false;">{{text}}</a></li>',
    'prevActive' => '<li class="page-item prev"><a class="page-link" rel="prev" href="{{url}}">{{text}}</a></li>',
    'prevDisabled' => '<li class="page-item prev disabled"><a class="page-link" href="" onclick="return false;">{{text}}</a></li>',
    'counterRange' => '{{start}} - {{end}} of {{count}}',
    'counterPages' => '{{page}} of {{pages}}',
    'first' => '<li class="page-item first"><a class="page-link" href="{{url}}">{{text}}</a></li>',
    'last' => '<li class="page-item last"><a class="page-link"  href="{{url}}">{{text}}</a></li>',
    'number' => '<li class="page-item"><a  class="page-link" href="{{url}}">{{text}}</a></li>',
    'current' => '<li class="page-item active"><a  class="page-link" href=">{{text}}</a></li>',
    'ellipsis' => '<li class="page-item ellipsis">&hellip;</li>',
    'sort' => '<a  class="page-link" href="{{url}}">{{text}}</a>',
    'sortAsc' => '<a  class="page-link" class="asc" href="{{url}}">{{text}}</a>',
    'sortDesc' => '<a  class="page-link" class="desc" href="{{url}}">{{text}}</a>',
    'sortAscLocked' => '<a  class="page-link" class="asc locked" href="{{url}}">{{text}}</a>',
    'sortDescLocked' => '<a  class="page-link" class="desc locked" href="{{url}}">{{text}}</a>'
];
