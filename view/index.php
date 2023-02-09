<?php
require_once("view/layout/header.php");?>

<table>
        <tr>
            <td>id</td>
            <td>nombre</td>
            <td>precio</td>
        </tr>
   
    <?php 
    if(!empty($dato)):
        foreach($dato as $key => $value)
        foreach($value as $v):?>
        <tr>
            <td><?php echo $v['id']?></td>
            <td><?php echo $v['nombre']?></td>
            <td><?php echo $v['precio']?></td>
        </tr>

        <?php endforeach;?>
        <?php else:?>
            <tr colspan="3">
                <td>no hay informacion </td>
            </tr>
    
            <?php endif; ?>
            </table>
<?php require_once("view/layout/footer.php");?>
