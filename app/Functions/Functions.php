<?php
/**
 * Created by PhpStorm.
 * User: FernNguyen
 * Date: 3/13/2016
 * Time: 12:03 PM
 */


function uncode_news($str){
    if(!$str) return false;
    $unicode = array(
        'a'=>array('á','à','ả','ã','ạ','ă','ắ','ặ','ằ','ẳ','ẵ','â','ấ','ầ','ẩ','ẫ','ậ','A','Á','À','Ả','Ã','Ạ','Ă','Ắ','Ặ','Ằ','Ẳ','Ẵ','Â','Ấ','Ầ','Ẩ','Ẫ','Ậ'),
        'd'=>array('đ','Đ','D'),
        'e'=>array('é','è','ẻ','ẽ','ẹ','ê','ế','ề','ể','ễ','ệ','É','È','Ẻ','Ẽ','Ẹ','Ê','Ế','Ề','Ể','Ễ','Ệ','E'),
        'i'=>array('í','ì','ỉ','ĩ','ị','Í','Ì','Ỉ','Ĩ','Ị','I'),
        'o'=>array('ó','ò','ỏ','õ','ọ','ô','ố','ồ','ổ','ỗ','ộ','ơ','ớ','ờ','ở','ỡ','ợ','Ó','Ò','Ỏ','Õ','Ọ','Ô','Ố','Ồ','Ổ','Ỗ','Ộ','Ơ','Ớ','Ờ','Ở','Ỡ','Ợ','O'),
        'u'=>array('ú','ù','ủ','ũ','ụ','ư','ứ','ừ','ử','ữ','ự','Ú','Ù','Ủ','Ũ','Ụ','Ư','Ứ','Ừ','Ử','Ữ','Ự','U'),
        'y'=>array('ý','ỳ','ỷ','ỹ','ỵ','Ý','Ỳ','Ỷ','Ỹ','Ỵ','Y'),
        ''=>array('/','[','^','0-9','_',']','$','%','*','@','!','~','”','“','.',':',','),
        '-'=>array(' ')
    );
    foreach($unicode as $nonUnicode=>$uni){
        foreach($uni as $value)
            $str = str_replace($value,$nonUnicode,$str);
    }


    return $str;
}

function f_url($txt)
{
    $txt = uncode_news(trim($txt));
    $stop_words = preg_split( "#\\s+#", "" );
    foreach ( $stop_words as $word )
    {
        $txt = preg_replace( "#\\s".$word."\\s#i", " ", $txt );
        $alist = array( "A", "Ă", "Â", "Á", "À", "Ả", "Ã", "Ạ", "Ắ", "Ằ", "Ẳ", "Ẵ", "Ặ", "Ã", "Ấ", "Ầ", "Ẩ", "Ẫ", "Ậ", "a", "ă", "â", "á", "à", "à ", "ả", "ã", "ạ", "ắ", "ằ", "ẳ", "ẵ", "ặ", "ấ", "ầ", "ẩ", "ẫ", "ậ" );
        $dlist = array( "D", "Đ", "d", "đ" );
        $elist = array( "E", "Ê", "É", "È", "Ẻ", "Ẽ", "Ẹ", "Ế", "Ề", "Ể", "Ễ", "Ệ", "e", "ê", "é", "è", "ẻ", "ẽ", "ẹ", "ế", "ề", "ể", "ễ", "ệ" );
        $ilist = array( "I", "Í", "Ì", "Ỉ", "Ĩ", "Ị", "i", "í", "ì", "ỉ", "ĩ", "ị" );
        $olist = array( "O", "Ô", "Ơ", "Ó", "Ò", "Ỏ", "Õ", "Ọ", "Ố", "Ồ", "Ổ", "Ỗ", "Ộ", "Ớ", "Ờ", "Ở", "Ỡ", "Ợ", "o", "ô", "ơ", "ó", "ò", "ỏ", "õ", "ọ", "ố", "ồ", "ổ", "ỗ", "ộ", "ớ", "ờ", "ở", "ỡ", "ợ" );
        $ulist = array( "U", "Ư", "Ú", "Ù", "Ủ", "Ũ", "Ụ", "Ứ", "Ừ", "Ử", "Ữ", "Ự", "u", "ư", "ú", "ù", "ủ", "ũ", "ụ", "ứ", "ừ", "ử", "ữ", "ự" );
        $ylist = array( "Y", "Ý", "Ỳ", "Ỷ", "Ỹ", "Ỵ", "y", "ý", "ỳ", "ỷ", "ỹ", "ỵ" );
        $txt = str_replace( $alist, "a", $txt );
        $txt = str_replace( $dlist, "d", $txt );
        $txt = str_replace( $elist, "e", $txt );
        $txt = str_replace( $ilist, "i", $txt );
        $txt = str_replace( $olist, "o", $txt );
        $txt = str_replace( $ulist, "u", $txt );
        $txt = str_replace( $ylist, "y", $txt );
    }
    $txt = html_entity_decode( $txt );
    $txt = str_replace( " ", "-", $txt );
    $txt = str_replace( "_", "-", $txt );
    $txt = preg_replace( "#[^a-zA-Z0-9_\\-]+#", "", $txt );
    $txt = preg_replace( "#[\\-]+#", "-", $txt );
    $txt = str_replace( "/", "-", $txt );
    return uncode_news(strtolower( $txt ));
}


function cstr($text, $start=0, $limit=12)
{
    if (function_exists('mb_substr')) {
        $more = (mb_strlen($text) > $limit) ? TRUE : FALSE;
        $text = mb_substr($text, 0, $limit, 'UTF-8');
        return array($text, $more);
    } elseif (function_exists('iconv_substr')) {
        $more = (iconv_strlen($text) > $limit) ? TRUE : FALSE;
        $text = iconv_substr($text, 0, $limit, 'UTF-8');
        return array($text, $more);
    } else {
        preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/", $text, $ar);
        if(func_num_args() >= 3) {
            if (count($ar[0])>$limit) {
                $more = TRUE;
                $text = join("",array_slice($ar[0],0,$limit))."...";
            }
            $more = TRUE;
            $text = join("",array_slice($ar[0],0,$limit));
        } else {
            $more = FALSE;
            $text =  join("",array_slice($ar[0],0));
        }
        $shot_v1 = $text;

        return array($shot_v1, $more);
    }
}


class MakeCharID
{
    var $char=array(83,79,88,104,118,117,73,78,68,70,82,115,75,84,112,120,86,54,100,106,49,113,99,80,52,74,50,53,72,107,121,111,98,103,66,87,76,101,67,108,51,116,114,122,77,57,119,71,90,65,105,109,97,81,48,56,110,102,69,55,85,89);
    //You can re-arrange this array for other converting result

    function ToChar($IntID)
    {
        $gigichar="";
        $num=count($this->char);
        do
        {
            $thuong = intval($IntID / $num);
            $sodu = $IntID- ( $thuong * $num);
            $IntID = $thuong;
            if($IntID<$num)
            {
                $gigichar = chr($this->char[$IntID]) . chr($this->char[$sodu]) . $gigichar;
            }
            else
            {
                $gigichar = chr($this->char[$sodu]) . $gigichar;
            }
        }while($IntID>=$num);
        return $gigichar;
    }

    function ToInt($CharID)
    {
        $char=array();

        for($i=0;$i<count($this->char);$i++)
        {
            array_push($char,chr($this->char[$i]));
        }

        $heso=1;
        $ID=0;

        for($i=strlen($CharID)-1;$i>=0;$i--)
        {
            $tmp=array_search($CharID[$i],$char);
            $tmp=$tmp*$heso;
            $ID=$ID+$tmp;
            $tmp=0;
            $heso=$heso*count($char);
        }
        return $ID;
    }
}

function ToInt($txt)
{
    $obj = new MakeCharID();
    $intID = $obj -> ToInt($txt);
    $intID = $intID - 123456789012;
    return $intID;
}
function ToChar($txt)
{
    $txt = $txt + 123456789012;
    $obj = new MakeCharID();
    $charID = $obj -> ToChar($txt);
    return $charID;
}

function cal_ago($time)
{
    $periods = array("giây", "phút", "giờ", "ngày", "tuần", "tháng", "năm", "thập kỷ");
    $lengths = array("60","60","24","7","4.35","12","10");

    $now = time();

    $difference     = $now - $time;
    $tense         = "trước";

    for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
        $difference /= $lengths[$j];
    }

    $difference = round($difference);

    if($difference != 1) {
        $periods[$j].= "";
    }

    return "$difference $periods[$j] $tense ";
}
function cut_string($str, $len=100, $charset='UTF-8'){
    $str = html_entity_decode($str, ENT_QUOTES, $charset);
    if(mb_strlen($str, $charset)> $len){
        $arr = explode(' ', $str);
        $str = mb_substr($str, 0, $len, $charset);
        $arrRes = explode(' ', $str);
        $last = $arr[count($arrRes)-1];
        unset($arr);
        if(strcasecmp($arrRes[count($arrRes)-1], $last))
        {
            unset($arrRes[count($arrRes)-1]);
        }
        return implode(' ', $arrRes)."...";
    }
    return $str;
}


//Todo: Tạo menu đệ quy lấy Category
    function get_category($data, $parent=0, $str="", $select=0){
        foreach($data as $key => $val){
            $id = $val['id'];
            $name = $val['name'];
                if($val['parent'] == $parent){

                    if($select != 0 && $id == $select){
                        echo "<option value='$id' selected='selected'>$str $name</option>";
                    }else{
                        echo "<option value='$id'>$str $name</option>";
                    }
                    get_category($data, $id, $str."---", $select);
                }
        }
    }

// Đóng các tag không có tag close trong nội dung.
function closetags ( $html )
{
    #put all opened tags into an array
    preg_match_all ( "#<([a-z]+)( .*)?(?!/)>#iU", $html, $result );
    $openedtags = $result[1];
    #put all closed tags into an array
    preg_match_all ( "#</([a-z]+)>#iU", $html, $result );
    $closedtags = $result[1];
    $len_opened = count ( $openedtags );
    # all tags are closed
    if( count ( $closedtags ) == $len_opened )
    {
        return $html;
    }
    $openedtags = array_reverse ( $openedtags );
    # close tags
    for( $i = 0; $i < $len_opened; $i++ )
    {
        if ( !in_array ( $openedtags[$i], $closedtags ) )
        {
            $html .= "</" . $openedtags[$i] . ">";
        }
        else
        {
            unset ( $closedtags[array_search ( $openedtags[$i], $closedtags)] );
        }
    }
    return $html;
}
// close opened html tags

?>