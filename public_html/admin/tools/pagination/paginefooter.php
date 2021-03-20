                           <?php

                                     if($pageactuelle>1)
                                    {
                                        $pagine = $pageactuelle - 1;
                                    echo '<li class="page-item"> <a class="page-link" href="toutescategories.php?page='.$pagine.'">Previous</a>  </li>';
                                    }else
                                    {
                                         print '<li class="page-item"><a class="page-link">Previous</a></li>';
                                    }
                                    ?>
                                     <?php
                                      for($i=1; $i<=$nombre_de_page; $i++) 
                                             {

                                                  if($i==$pageactuelle)                 
                                                         {
                                                                 echo '<li class="page-item"> <a class="page-link" href="">'.$i.'</a>  </li>';
                                                         }  
                                                            else 
                                                         {
                                                               echo '<li class="page-item"> <a class="page-link" href="toutescategories.php?page='.$i.'">'.$i.'</a>  </li>';
                                                         }
                                            }
                                     ?>
                                      <?php
                                     if($pageactuelle<$nombre_de_page)
                                    {
                                        $pagine = $pageactuelle + 1;
                                    echo '<li class="page-item"> <a class="page-link" href="toutescategories.php?page='.$pagine.'">Next</a>  </li>';
                                    }else
                                    {
                                         print '<li class="page-item"><a class="page-link">Next</a></li>';
                                    }
                                    ?>
                                   
                                    <?php   ?>