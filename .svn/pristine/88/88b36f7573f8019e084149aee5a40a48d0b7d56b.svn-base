<?php

    class SideBar {
        /*
         * $node 查询数据库之后的结果集
         * $cen 循环到第几层
         * $pid 父级的id，第一级的父级默认为 0
         * 目的：生成 UL Li嵌套的无限级UL列表
         */

        public function mergeUlTree($node, $cen = 1, $pid = 0) {
            $tree = "<ul";
            if ($cen == 1) {
                $tree .=" class='sidebar-menu'";
            } else {
                $tree .=" class='treeview-menu'";
            }
            $tree .=">";
            foreach ($node as $v) {
                if ($v->parent_id == $pid) {
                    $tree.= "<li";
                    if ($cen == 1) {
                        $tree.= " class='treeview'";
                    }
                    $tree.= ">";
                    $tree.= "<a href='#'>";
                    $tree.= "<i class='" . $v->icon . "‘></i>";
                    $tree.= "<span>";
                    $tree.= $v->title;
                    $tree.= "</span>";
                    $have_next = false;
                    foreach ($node as $n) {
                        if ($n->parent_id == $v->id) {
                            $have_next = true;
                        }
                    }
                    if ($have_next) {
                        $tree.= "<i class='fa fa-angle-left pull-right'></i>";
                    }
                    $tree.= "</a>";
                    $cen+= 1;
                    $tree.= $this->mergeUlTree($node, $cen, $v->id);
                    $tree.= "</li>";
                }
            }
            return $tree . "</ul>";
        }

    }
    