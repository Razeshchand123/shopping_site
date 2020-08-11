






                  where('psln','=', $a)
                  ->where('psle','=',$this->oneremail)   
                        ->where('pslo','=',$this->onername)  
                        
                         ->where('pslno','=',$c)   
                         
                         ->where('psla','=',$adrs)          
                          ->get(); 