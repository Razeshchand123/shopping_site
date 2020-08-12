<div>
    

   

<!-- <button wire:click="$emitTo('counter', 'postAdded')"> -->

<div class="nav navcover">
<!-- otercose -->
<div class="main">
            <ul class="mainnav">
             
            <li class="hassubs"><a href="#" wire:click.prevent="$emit('postAdded','cloth')">cloth </a>
                    <ul class="dropdown-menuwala">
                        
                        <li class="subs hassubs">
                            <buttton class="btn" wire:click.prevent="$emit('twocata','cloth','male')">male <i class="fas fa-caret-right"></i></button>
                            <ul class="dropdown-menuwala">
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','cloth','male','upper')">upper</button></li>
                                <li class="subs"><button class="btn"  wire:click.prevent="$emit('threest','cloth','male','lower')">lower</button></li>
                                <li class="subs"><button class="btn"  wire:click.prevent="$emit('threest','cloth','male','inner')">inner</button></li>
                                <li class="subs"><button class="btn"  wire:click.prevent="$emit('threest','cloth','male','other')">other</button></li>
                            
                              </ul>
                        </li>
                        <li class="subs hassubs"><buttton class="btn" wire:click.prevent="$emit('twocata','cloth','female')">female <i class="fas fa-caret-right"></i></button>
                            <ul class="dropdown-menuwala">
                            <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','cloth','female','upper')">upper</button></li>
                                <li class="subs"><button class="btn"  wire:click.prevent="$emit('threest','cloth','female','lower')">lower</button></li>
                                <li class="subs"><button class="btn"  wire:click.prevent="$emit('threest','cloth','female','inner')">inner</button></li>
                                <li class="subs"><button class="btn"  wire:click.prevent="$emit('threest','cloth','female','other')">other</button></li>
                                 
                          </ul>
                        </li>
                        <li class="subs hassubs"><buttton class="btn" wire:click.prevent="$emit('twocata','cloth','child')">kids <i class="fas fa-caret-right"></i></button>
                            <ul class="dropdown-menuwala">
                                 <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','cloth','kids','upper')">upper</button></li>
                                <li class="subs"><button class="btn"  wire:click.prevent="$emit('threest','cloth','kids','lower')">lower</button></li>
                                <li class="subs"><button class="btn"  wire:click.prevent="$emit('threest','cloth','kids','inner')">inner</button></li>
                                <li class="subs"><button class="btn"  wire:click.prevent="$emit('threest','cloth','kids','other')">other</button></li>
                            
                            </ul>
                        </li>
                        
                    </ul>
                </li>
                <!-- clothend  -->
                <!-- shoes  start-->
                <li class="hassubs"><a href="#" wire:click.prevent="$emit('postAdded','shoees')">shoes</a>
                    <ul class="dropdown-menuwala">
                        
                        <li class="subs hassubs"><buttton class="btn" wire:click.prevent="$emit('twocata','shoees','male')">male <i class="fas fa-caret-right"></i></button>
                            <ul class="dropdown-menuwala">
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','shoees','male','sport')">sport</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','shoees','male','sport')">party</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','shoees','male','casual')">casual</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','shoees','male','sport')">boot</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','shoees','male','other')">other</button></li>
                            </ul>
                        </li>
                        <li class="subs hassubs"><buttton class="btn" wire:click.prevent="$emit('twocata','shoees','female')">female <i class="fas fa-caret-right"></i></button>
                            <ul class="dropdown-menuwala">
                            <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','shoees','shoees','sport')">sport</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','shoees','female','sport')">party</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','shoees','female','casual')">casual</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','shoees','female','sport')">boot</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','shoees','female','other')">other</button></li>
                           
                            </ul>
                        </li>
                        <li class="subs hassubs"><buttton class="btn" wire:click.prevent="$emit('twocata','shoees','kids')">kids <i class="fas fa-caret-right"></i></button>
                            <ul class="dropdown-menuwala">
                            <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','shoees','shoees','sport')">sport</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','shoees','kids','sport')">party</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','shoees','kids','casual')">casual</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','shoees','kids','sport')">boot</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','shoees','kids','other')">other</button></li>
                           
                            </ul>
                        </li>
                        
                    </ul>
                </li>

                <!-- accesories start  -->
                <li class="hassubs"><a href="#" wire:click.prevent="$emit('postAdded','accesrrios')">accesrrios</a>
                    <ul class="dropdown-menuwala">
                        
                        <li class="subs hassubs"><buttton class="btn" wire:click.prevent="$emit('twocata','accesrrios','male')">male <i class="fas fa-caret-right"></i></button>
                            <ul class="dropdown-menuwala">
                           
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','accesrrios','male','sunglass')">sunglass</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','accesrrios','male','watches')">watches</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','accesrrios','male','Jewellery')">Jewellery</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','accesrrios','male','Wallets')">Wallets</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','accesrrios','male','others')">others</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','accesrrios','male','Jewellery')">bags</button></li>

                            </ul>
                        </li>
                        <li class="subs hassubs"><buttton class="btn" wire:click.prevent="$emit('twocata','accesrrios','female')">female <i class="fas fa-caret-right"></i></button>
                            <ul class="dropdown-menuwala">
                            <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','accesrrios','female','sunglass')">sunglass</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','accesrrios','female','watches')">watches</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','accesrrios','female','Jewellery')">Jewellery</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','accesrrios','female','Wallets')">Wallets</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','accesrrios','female','others')">others</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','accesrrios','female','Jewellery')">bags</button></li>
                            </ul>
                        </li>
                        <li class="subs hassubs"><buttton class="btn" wire:click.prevent="$emit('twocata','accesrrios','kids')">kids <i class="fas fa-caret-right"></i></button>
                            <ul class="dropdown-menuwala">
                            <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','accesrrios','kids','sunglass')">sunglass</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','accesrrios','kids','watches')">watches</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','accesrrios','kids','Jewellery')">Jewellery</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','accesrrios','kids','Wallets')">Wallets</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','accesrrios','kids','others')">others</button></li>
                                <li class="subs"><button class="btn" wire:click.prevent="$emit('threest','accesrrios','kids','Jewellery')">bags</button></li>
                            </ul>
                          
                        </li>
                        
                    </ul>
                </li>
                <li class="hassubs"><a href="#">Electronics</a>
                    <ul class="dropdown-menuwala">
                        
                        <li class="subs hassubs"><a href="#">Tv <i class="fas fa-caret-right"></i></a>
                            <ul class="dropdown-menuwala">
                                <li class="subs"><a href="#">samsung</a></li>
                                <li class="subs"><a href="#">lg</a></li>
                                <li class="subs"><a href="#">panasonic</a></li>
                                <li class="subs"><a href="#">others</a></li>
                            </ul>
                        </li>
                        <li class="subs hassubs"><a href="#">fridge <i class="fas fa-caret-right"></i></a>
                            <ul class="dropdown-menuwala">
                                <li class="subs"><a href="#">godarage</a></li>
                                <li class="subs"><a href="#">samsung</a></li>
                                <li class="subs"><a href="#">lg</a></li>
                                <li class="subs"><a href="#">panasonic</a></li>
                                <li class="subs"><a href="#">others</a></li>
                            </ul>
                        </li>
                        <li class="subs hassubs"><a href="#">Redio <i class="fas fa-caret-right"></i></a>
                            <ul class="dropdown-menuwala">
                                <li class="subs"><a href="#">....</a></li>
                                <li class="subs"><a href="#">...</a></li>
                                <li class="subs"><a href="#">...</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </li>
                <li class="hassubs"><a href="#">Sports</a>
                    <ul class="dropdown-menuwala">
                        
                        <li class="subs hassubs"><a href="#">bat <i class="fas fa-caret-right"></i></a>
                            <ul class="dropdown-menuwala">
                                <li class="subs"><a href="#">Mrf</a></li>
                                <li class="subs"><a href="#">lg</a></li>
                                <li class="subs"><a href="#">inner</a></li>
                            </ul>
                        </li>
                        <li class="subs hassubs"><a href="#">vollyball <i class="fas fa-caret-right"></i></a>
                            <ul class="dropdown-menuwala">
                                <li class="subs"><a href="#">upper</a></li>
                                <li class="subs"><a href="#">lower</a></li>
                                <li class="subs"><a href="#">inner</a></li>
                            </ul>
                        </li>
                        <li class="subs hassubs"><a href="#">batmentin <i class="fas fa-caret-right"></i></a>
                            <ul class="dropdown-menuwala">
                                <li class="subs"><a href="#">upper</a></li>
                                <li class="subs"><a href="#">lower</a></li>
                                <li class="subs"><a href="#">inner</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </li>
                <li class="hassubs"><a href="#">cloth</a>
                    <ul class="dropdown-menuwala">
                        
                        <li class="subs hassubs"><a href="#">male <i class="fas fa-caret-right"></i></a>
                            <ul class="dropdown-menuwala">
                                <li class="subs"><a href="#">upper</a></li>
                                <li class="subs"><a href="#">lower</a></li>
                                <li class="subs"><a href="#">inner</a></li>
                            </ul>
                        </li>
                        <li class="subs hassubs"><a href="#">female</a>
                            <ul class="dropdown-menuwala">
                                <li class="subs"><a href="#">upper</a></li>
                                <li class="subs"><a href="#">lower</a></li>
                                <li class="subs"><a href="#">inner</a></li>
                            </ul>
                        </li>
                        <li class="subs hassubs"><a href="#">kids</a>
                            <ul class="dropdown-menuwala">
                                <li class="subs"><a href="#">upper</a></li>
                                <li class="subs"><a href="#">lower</a></li>
                                <li class="subs"><a href="#">inner</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </li>
                
                <li><a href="/" class="btn text-danger">ALL</a></li>

            </ul>
            
            <br style="clear: both;">
        </div>
 
<!-- ouercode -->
</div>
     

<livewire:products/>


</div>
