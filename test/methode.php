<?php

 class CHERCH
{

   function groupe($equipe,$resultal)

    {
        foreach ($resultal as $val)
        {
            if($val['Team']==$equipe)
            {
              return $val['Groupe'];
            }
        }
        return "nexite pas cette pays";
    }
    

function maxpoin($resultal){
        $max=0;
   
      foreach ($resultal as $val)
        {
            if($max <= $val['Bp'] )
            {
            $max=$val['Bc'];
            }
        }
        $m=0;

        foreach ($resultal as $val)
        {
            if($max==$val['Bp'])
            {
                $pays[$m]=$val['Team'];
                $m++;
            }
        }
        return $pays ;
    }

    function defance($resultal)

    {
      $min=$resultal[0]['Bc'];
     
      foreach ($resultal as $val)
          {
              if($min>=$val['Bc'] )
              {
              $min=$val['Bc'];
              }
          }
          $m=0;
  
          foreach ($resultal as $val)
          {
              if($min==$val['Bc'])
              {
                  $pays[$m]=$val['Team'];
                  $m++;
              }
          }
          return $pays;
    }






  
}



?>