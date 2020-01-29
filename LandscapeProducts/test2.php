                     <?
                               

                        $testPic = 46197;            


                        $filename = '../LandscapeProducts/dfiles/images/' . $testPic . '-p.jpg';

                        if (file_exists($filename)) {
                            
                            $pFile = $testPic . '-p.jpg';
                            
                        } else {
                            
                            $pFile = 'blank-p.jpg';
                            
                        }

                        echo file_exists('../LandscapeProducts/dfiles/images/' . $testPic . '-p.jpg');
                        echo $pFile;


                                                
                    ?>           