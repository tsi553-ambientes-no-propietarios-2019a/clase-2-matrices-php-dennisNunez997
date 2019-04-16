<?php

    $tabla = 
    [
        
        'nombre' =>
            ['Dennis',
            'Maria',
            'Luisa'],
        'apellidos' =>
            ['Nunez',
            'Perez',
            'Martinez'],
        'edad' => 
            ['22',
            '25',
            '27'],
    ];
    
    
?>

<!doctype html>

<html>
<head>

    <title>tabla</title>
    
</head>
<body>

   <table>
       
        <tr>
            <th>
                <?php foreach($tabla as $k => $columna)
                {
        
                    if($k === 'nombre')
                    {
                        echo $k. "<h3>";
                    }
                }
                ?>
            </th>

            <th>
                <?php foreach($tabla as $k => $columna)
                {
        
                    if($k === 'apellidos')
                    {
                        echo $k. "<h3>";
                    }
                }
                ?>
            </th>

            <th>
                <?php foreach($tabla as $k => $columna)
                {
        
                    if($k === 'edad')
                    {
                        echo $k. "<h3>";
                    }
                }
                ?>
            </th>
            
            
        </tr>

        
        <tr>
            <td>
                
                <?php foreach($tabla as $k => $columna)
                    {
        
                        foreach($columna as $datos)
                        {
                            if($datos === 'Dennis')
                            {
                                echo $datos;
                            }
                        }
                    }
                ?>
            </td>
            
            <td>
            
                <?php foreach($tabla as $k => $columna)
                {
        
                    foreach($columna as $datos)
                    {
                        if($datos === 'Nunez')
                        {
                            echo $datos;
                        }
                    }
                }
                ?>

            </td>
        
            <td>
            
                <?php foreach($tabla as $k => $columna)
                    {
        
                        foreach($columna as $datos)
                        {
                            if($datos === '22')
                            {
                                echo $datos;
                            }
                        }
                    }
                ?>

            </td>
        </tr>

        <tr>
            <td>
                
                <?php foreach($tabla as $k => $columna)
                    {
        
                        foreach($columna as $datos)
                        {
                            if($datos === 'Maria')
                            {
                                echo $datos;
                            }
                        }
                    }
            
                ?>

            </td>

            <td>
                    
                <?php foreach($tabla as $k => $columna)
                {
        
                    foreach($columna as $datos)
                    {
                        if($datos === 'Perez')
                        {
                            echo $datos;
                        }
                    }
                }
                ?>

            </td>

            <td>
                
                <?php foreach($tabla as $k => $columna)
                    {
        
                        foreach($columna as $datos)
                        {
                            if($datos === '25')
                            {
                                echo $datos;
                            }
                        }
                    }
                ?>

            </td>
        </tr>

        <tr>
            <td>

                <?php foreach($tabla as $k => $columna)
                    {
        
                        foreach($columna as $datos)
                        {
                            if($datos === 'Luisa')
                            {
                                echo $datos;
                            }
                        }
                    }
                ?>

            </td>
            
            <td>
                    
                <?php foreach($tabla as $k => $columna)
                {
        
                    foreach($columna as $datos)
                    {
                        if($datos === 'Martinez')
                        {
                            echo $datos;
                        }
                    }
                }
                ?>

            </td>

            <td>
                
                <?php foreach($tabla as $k => $columna)
                    {
        
                        foreach($columna as $datos)
                        {
                            if($datos === '27')
                            {
                                echo $datos;
                            }
                        }
                    }
                ?>



            </td>
        </tr>
        
        

   </table> 
</body>
</html>