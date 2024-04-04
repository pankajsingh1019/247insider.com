<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppHelper', 'View/Helper');

class ProductsHelper extends AppHelper
{

    public function getPaginationString($totalProducts, $pageSelected, $pageSize, $numberOfPages)
    {
        $totalPages = $lastPageNumberToDisplay = ceil($totalProducts / $pageSize);
        $firstPageNumberToDisplay = 1;
        $paginatedPages = "";

        $productStart = ($pageSelected == 1) ? 1 : ($pageSelected - 1) * $pageSize + 1;
        $productEnd = $pageSelected * $pageSize;
        $paginatedPages .= "";

        if ($totalPages > 1) {
            $paginatedPages .= '<p class="rightcatheader fright">';

            //todo :try moving to model
            $fullUrl = Configure::read('full_request_url');
            $path = parse_url($fullUrl, PHP_URL_PATH);
            parse_str($_SERVER['QUERY_STRING'], $queryParameters);

            if ($pageSelected > 1) {
                $queryParameters['page_number'] = $pageSelected - 1;
                $paginatedPages .= '<a class="serp-nav prev-nav-serp"  href="' . $path . '?' . http_build_query($queryParameters) . '" ><span></span></a> ';
            }
            if($numberOfPages==5){
                if ($pageSelected >= 4) {
                    $firstPageNumberToDisplay = ($pageSelected - 2);
            }
            }else{
                if ($pageSelected >= 2) {
                    $firstPageNumberToDisplay = ($pageSelected - 1);
                }
            }
            if ($pageSelected <= ($totalPages - 4)) {
                if($numberOfPages==5){
                    $lastPageNumberToDisplay = ($pageSelected + 2);
                }else{
                    $lastPageNumberToDisplay = ($pageSelected + 1);
                }
            }

            for ($i = $firstPageNumberToDisplay; $i <= $lastPageNumberToDisplay; $i++) {
                if ($pageSelected == $i) {
                    $link = $i;
                    $queryParameters['page_number'] = $i;
                    if($i < 10)
                        $link = $i;
                    $paginatedPages .= '<a class="active page-count-num"  href="javascript:void(0)" >' . $link . '</a>';
                } else {
                    $link = $i;
                    $queryParameters['page_number'] = $i;
                    if($i < 10)
                        $link = $i;
                    $paginatedPages .= '<a class="page-count-num"  href="' . $path . '?' . http_build_query($queryParameters) . '" >' . $link . '</a>';
                }
                // $queryParameters['page_number'] = $i;
                // $paginatedPages .= '<a  href="' . $path . '?' . http_build_query($queryParameters) . '" >' . $link . '</a>';
            }


            if ($pageSelected < $totalPages) {
                $queryParameters['page_number'] = $pageSelected + 1;
                $paginatedPages .= '<a class="next-nav-serp serp-nav"  href="' . $path . '?' . http_build_query($queryParameters) . '" ><span></span> </a>  ';
            }

            $paginatedPages .= '</p>';
            return $paginatedPages;
        }
    }

    public function getPaginationStringQA($totalProducts, $pageSelected, $pageSize)
    {
        $totalPages = $lastPageNumberToDisplay = ceil($totalProducts / $pageSize);
        $firstPageNumberToDisplay = 1;
        $paginatedPages = "";
        if ($totalPages > 1) {

//            todo :try moving to model
            $fullUrl = Configure::read('full_request_url');
            $path = parse_url($fullUrl, PHP_URL_PATH);
            parse_str($_SERVER['QUERY_STRING'], $queryParameters);

            if ($pageSelected > 1) {
                $queryParameters['page_number'] = $pageSelected - 1;
                $paginatedPages .= '<span class="prev"><a href="' . $path . '?' . http_build_query($queryParameters) . '">« Prev</a></span> | ';
            }

            if ($pageSelected >= 4) {
                $firstPageNumberToDisplay = ($pageSelected - 2);
            }
            if ($pageSelected <= ($totalPages - 4)) {
                $lastPageNumberToDisplay = ($pageSelected + 2);
            }

            for ($i = $firstPageNumberToDisplay; $i <= $lastPageNumberToDisplay; $i++) {
                if ($pageSelected == $i) {
                    $link = '<b style="color:#dc4a4f;">' . $i . '</b>';
                } else {
                    $link = $i;
                }
                $queryParameters['page_number'] = $i;
                $paginatedPages .= '<a href="' . $path . '?' . http_build_query($queryParameters) . '">' . $link . '</a> | ';
            }

            if ($pageSelected < $totalPages) {
                $queryParameters['page_number'] = $pageSelected + 1;
                $paginatedPages .= '<span class="next"><a style="margin-left:5px;" href="' . $path . '?' . http_build_query($queryParameters) . '">  Next »</a> </span> ';
            }

            echo $paginatedPages;
        }
    }


}