<form action="filtered_search.php" method="POST" class="form-group">
                        <div class="row">
                            <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                <h4 class="display text-primary">Genre&#58;</h4>
                            </div>
                            <div class="form-group col-4">
                                <label for="form-select" id="form-select"></label>
                                <select class="form-control" name="genre">
                                    <?php
                                        $selected ='';
                                        function get_genre($select){
                                            $genre = array('Select' => 'Select',
                                                            'Action' => 'Action',
                                                            'Drama' => 'Drama',
                                                            'Thriller' => 'Thriller',
                                                            'Romantic' => 'Romantic');
                                            while(list($k, $v) = each($genre)){
                                                if ($select == $v){
                                                    $options .= "<option value=".$v." selected>".$k."</option>";
                                                }
                                                else{
                                                    $options .= "<option value=".$v." >".$k."</option>";
                                                }
                                            }
                                            return $options;
                                        } 
                                        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                            
                                            $selected = $_POST['genre'];
                                            echo $selected;
                                        }
                                        echo get_genre($selected);
                                    ?>  
                                </select>
                            </div> 
                            <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                <h4 class="display text-primary">Actor&#58;</h4>
                            </div>
                            <div class="form-group col-4">
                                <label for="form-select" id="form-select"></label>
                                <input type="text" class="form-control m-3" placeholder="Actor's name"/>
                            </div> 
                        </div>    
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                        <h4 class="display text-primary">Rank&#58;</h4>
                                    </div>
                                    <div class="form-group d-flex flex-row justify-content-center align-items-center">
                                        <label for="form-select" id="form-select"></label>
                                        <select class="form-control" name="rankcomp">
                                            <option>Select</option>
                                            <option>Equal to</option>
                                            <option>Not equal to</option>
                                            <option>Greater than</option>
                                            <option>Greater than equal to</option>
                                            <option>Less than</option>
                                            <option>Less than equal to</option>
                                            <?php/*
                                                $selected ='';
                                                function get_rank_comp($select){
                                                    $rank_comp = array('Select' => 'Select',
                                                                    'Equal to' => 'Equal to',
                                                                    'Greater than' => 'Greater than',
                                                                    'Greater than equal to' => 'Greater than equal to',
                                                                    'Less than' => 'Less than',
                                                                    'Less than equal to' => 'Less than equal to',
                                                                    'Not equal to' => 'Not equal to',
                                                                    
                                                                );
                                                    while(list($k, $v) = each($rank_comp)){
                                                    
                                                        if ($select == $v){
                                                            $options .= "<option value=".$v." selected>".$k."</option>";
                                                        }
                                                        else{
                                                            $options .= "<option value=".$v." >".$k."</option>";
                                                        }
                                                    }
                                                    return $options;
                                                } 
                                                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                    
                                                    $selected = $_POST['rankcomp'];
                                                    echo $selected;
                                                }
                                                echo get_rank_comp($selected);
                                                */
                                            ?>  
                                        </select>
                                        <input type="number" min="1" max="1000" class="form-control m-3" placeholder="Enter value" id="rankvalue" name="rankvalue" onchange="check_rank_val()">
                                        <?php/*
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                $selected = $_POST['rankval'];
                                                echo $selected;
                                            }*/
                                        ?>
                                    </div>
                                </div> 
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                        <h4 class="display text-primary">Year&#58;</h4>
                                    </div>
                                    <div class="form-group d-flex flex-row justify-content-center align-items-center">
                                        <label for="form-select" id="form-select"></label>
                                        <select class="form-control" name="yearcomp">
                                            <?php/*
                                                $selected ='';
                                                function get_year_comp($select){
                                                    $year_comp = array('Select' => 'Select',
                                                                    'Equal to' => 'Equal to',
                                                                    'Greater than' => 'Greater than',
                                                                    'Greater than equal to' => 'Greater than equal to',
                                                                    'Less than' => 'Less than',
                                                                    'Less than equal to' => 'Less than equal to',
                                                                    'Not equal to' => 'Not equal to',
                                                                    
                                                                );
                                                    while(list($k, $v) = each($year_comp)){
                                                    
                                                        if ($select == $v){
                                                            $options .= "<option value=".$v." selected>".$k."</option>";
                                                        }
                                                        else{
                                                            $options .= "<option value=".$v." >".$k."</option>";
                                                        }
                                                    }
                                                    return $options;
                                                } 
                                                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                    
                                                    $selected = $_POST['yearcomp'];
                                                    echo $selected;
                                                }
                                                echo get_year_comp($selected);
                                                */
                                            ?>  
                                        </select>
                                        <input type="number" min="1900" max="2019" class="form-control m-3" placeholder="Enter value" id="yearvalue" name="yearvalue" onchange="check_year_val()">
                                        <?php/*
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                $selected = $_POST['yearval'];
                                                echo $selected;
                                            }*/
                                        ?>
                                    </div> 
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                        <h4 class="display text-primary">Runtime <small>(Minutes)</small>&#58;</h4>
                                    </div>
                                    <div class="form-group d-flex flex-row justify-content-center align-items-center">
                                        <label for="form-select" id="form-select"></label>
                                        <select class="form-control" name="runtimecomp">
                                            <?php/*
                                                $selected ='';
                                                function get_runtime_comp($select){
                                                    $runtime_comp = array('Select' => 'Select',
                                                                    'Equal to' => 'Equal to',
                                                                    'Greater than' => 'Greater than',
                                                                    'Greater than equal to' => 'Greater than equal to',
                                                                    'Less than' => 'Less than',
                                                                    'Less than equal to' => 'Less than equal to',
                                                                    'Not equal to' => 'Not equal to',
                                                                    
                                                                );
                                                    while(list($k, $v) = each($runtime_comp)){
                                                    
                                                        if ($select == $v){
                                                            $options .= "<option value=".$v." selected>".$k."</option>";
                                                        }
                                                        else{
                                                            $options .= "<option value=".$v." >".$k."</option>";
                                                        }
                                                    }
                                                    return $options;
                                                } 
                                                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                    
                                                    $selected = $_POST['runtimecomp'];
                                                    echo $selected;
                                                }
                                                echo get_runtime_comp($selected);
                                                */
                                            ?>  
                                        </select>
                                        <input type="number" min="1" max="240" class="form-control m-3" placeholder="Enter value" id="runtimevalue" name="runtimevalue" onchange="check_runtime_val()">
                                        <?php/*
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                $selected = $_POST['runtimeval'];
                                                echo $selected;
                                            }*/
                                        ?>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                        <h4 class="display text-primary">Votes&#58;</h4>
                                    </div>
                                    <div class="form-group d-flex flex-row justify-content-center align-items-center">
                                        <label for="form-select" id="form-select"></label>
                                        <select class="form-control" name="rankcomp">
                                            <?php/*
                                                $selected ='';
                                                function get_votes_comp($select){
                                                    $votes_comp = array('Select' => 'Select',
                                                                    'Equal to' => 'Equal to',
                                                                    'Greater than' => 'Greater than',
                                                                    'Greater than equal to' => 'Greater than equal to',
                                                                    'Less than' => 'Less than',
                                                                    'Less than equal to' => 'Less than equal to',
                                                                    'Not equal to' => 'Not equal to',
                                                                    
                                                                );
                                                    while(list($k, $v) = each($votes_comp)){
                                                    
                                                        if ($select == $v){
                                                            $options .= "<option value=".$v." selected>".$k."</option>";
                                                        }
                                                        else{
                                                            $options .= "<option value=".$v." >".$k."</option>";
                                                        }
                                                    }
                                                    return $options;
                                                } 
                                                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                    
                                                    $selected = $_POST['votescomp'];
                                                    echo $selected;
                                                }
                                                echo get_votes_comp($selected);
                                                */
                                            ?>  
                                        </select>
                                        <input type="number" min="1" max="1800000" class="form-control m-3" placeholder="Enter value" id="votesvalue" name="votesvalue" onchange="check_votes_val()">
                                        <?php/*
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                $selected = $_POST['votesval'];
                                                echo $selected;
                                            }*/
                                        ?>
                                    </div>
                                </div> 
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                        <h4 class="display text-primary">Revenue&#58;</h4>
                                    </div>
                                    <div class="form-group d-flex flex-row justify-content-center align-items-center">
                                        <label for="form-select" id="form-select"></label>
                                        <select class="form-control" name="revenuecomp">
                                            <?php/*
                                                $selected ='';
                                                function get_revenue_comp($select){
                                                    $revenue_comp = array('Select' => 'Select',
                                                                    'Equal to' => 'Equal to',
                                                                    'Greater than' => 'Greater than',
                                                                    'Greater than equal to' => 'Greater than equal to',
                                                                    'Less than' => 'Less than',
                                                                    'Less than equal to' => 'Less than equal to',
                                                                    'Not equal to' => 'Not equal to',
                                                                    
                                                                );
                                                    while(list($k, $v) = each($revenue_comp)){
                                                    
                                                        if ($select == $v){
                                                            $options .= "<option value=".$v." selected>".$k."</option>";
                                                        }
                                                        else{
                                                            $options .= "<option value=".$v." >".$k."</option>";
                                                        }
                                                    }
                                                    return $options;
                                                } 
                                                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                    
                                                    $selected = $_POST['revenuecomp'];
                                                    echo $selected;
                                                }
                                                echo get_revenue_comp($selected);
                                                */
                                            ?>  
                                        </select>
                                        <input type="number" min="1" max="1000" class="form-control m-3" placeholder="Enter value" id="revenuevalue" name="revenuevalue" onchange="check_revenue_val()">
                                        <?php/*
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                $selected = $_POST['revenueval'];
                                                echo $selected;
                                            }*/
                                        ?>
                                    </div> 
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-2 d-flex flex-row justify-content-center align-items-center">
                                        <h4 class="display text-primary">Metascore&#58;</h4>
                                    </div>
                                    <div class="form-group d-flex flex-row justify-content-center align-items-center">
                                        <label for="form-select" id="form-select"></label>
                                        <select class="form-control" name="metascorecomp">
                                            <?php/*
                                                $selected ='';
                                                function get_metascore_comp($select){
                                                    $year_comp = array('Select' => 'Select',
                                                                    'Equal to' => 'Equal to',
                                                                    'Greater than' => 'Greater than',
                                                                    'Greater than equal to' => 'Greater than equal to',
                                                                    'Less than' => 'Less than',
                                                                    'Less than equal to' => 'Less than equal to',
                                                                    'Not equal to' => 'Not equal to',
                                                                    
                                                                );
                                                    while(list($k, $v) = each($year_comp)){
                                                    
                                                        if ($select == $v){
                                                            $options .= "<option value=".$v." selected>".$k."</option>";
                                                        }
                                                        else{
                                                            $options .= "<option value=".$v." >".$k."</option>";
                                                        }
                                                    }
                                                    return $options;
                                                } 
                                                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                    
                                                    $selected = $_POST['metascorecomp'];
                                                    echo $selected;
                                                }
                                                echo get_runtime_comp($selected);
                                                */
                                            ?>  
                                        </select>
                                        <input type="number" min="1" max="100" class="form-control m-3" placeholder="Enter value" id="metascorevalue" name="metascorevalue" onchange="check_metascore_val()">
                                        <?php/*
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                                                $selected = $_POST['metascoreval'];
                                                echo $selected;
                                            }*/
                                        ?>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <hr class="col-6">
                        <button class="btn col-1 btn-primary" type="submit" value="submit" id="submit" onclick="">
                            Go
                        </button>
                    </form>