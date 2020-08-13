






                  where('psln','=', $a)
                  ->where('psle','=',$this->oneremail)   
                        ->where('pslo','=',$this->onername)  
                        
                         ->where('pslno','=',$c)   
                         
                         ->where('psla','=',$adrs)          
                          ->get(); 


                          $search_data = DB::table('users')->where('CustomerName' LIKE 'this->search%');

                          SELECT * FROM Customers
                           WHERE CustomerName LIKE 'a%';

hello developers 
how can use like sql query in laravel 
i tried this is this right?
$search_data = DB::table('users')->where('CustomerName' LIKE 'this->search%');