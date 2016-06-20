<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  $GLOBALS['basical']=array(0=>"零","壹","贰","叁","肆","伍","陆","柒","捌","玖");
  
  $GLOBALS['advanced']=array(1=>"拾","佰","仟");
 
  function ParseNumber($number){
    $number=trim($number);
    if ($number>999999999999) return "数字太大，无法处理。抱歉！";
    if ($number==0) return "零";
    if(strpos($number,'.')){
      $number=round($number,2);
      $data=explode(".",$number);
      $data[0]=intMH($data[0]);
      $data[1]=decMH($data[1]);
      return $data[0].$data[1];
    }else{
      return intMH($number).'整';
    }
  }
  
  function intMH($number){
    $arr=array_reverse(str_split($number));
    $data='';
    $zero=false;
    $zero_num=0;
    foreach ($arr as $k=>$v){
      $_chinese='';
      $zero=($v==0)?true:false;
      $x=$k%4;
      if($x && $zero && $zero_num>1)continue;
      switch ($x){
        case 0:
          if($zero){
            $zero_num=0;
          }else{
            $_chinese=$GLOBALS['basical'][$v];
            $zero_num=1;
          }
          if($k==8){
            $_chinese.='亿';
          }elseif($k==4){
            $_chinese.='万';
          }
          break;  
        default:
          if($zero){
            if($zero_num==1){
              $_chinese=$GLOBALS['basical'][$v];
              $zero_num++;
            }
          }else{
            $_chinese=$GLOBALS['basical'][$v];
            $_chinese.=$GLOBALS['advanced'][$x];
          }
      }
      $data=$_chinese.$data;
    }
    return $data.'元';
  }
   
  function decMH($number){
    if(strlen($number)<2) $number.='0';
    $arr=array_reverse(str_split($number));
    $data='';
    $zero_num=false;
    foreach ($arr as $k=>$v){
      $zero=($v==0)?true:false;
      $_chinese='';
      if($k==0){
        if(!$zero){
          $_chinese=$GLOBALS['basical'][$v];
          $_chinese.='分';
          $zero_num=true;
        }
      }else{
        if($zero){
          if($zero_num){
            $_chinese=$GLOBALS['basical'][$v];
          }
        }else{
          $_chinese=$GLOBALS['basical'][$v];
          $_chinese.='角';
        }
      }
      $data=$_chinese.$data;
    }
    return $data;
  }

