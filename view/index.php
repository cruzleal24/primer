<?php
require_once("layout/header.php");?>
<table>
    <tr>
        <td>id</td>
        <td>nombre</td>
        <td>precio</td>
    </tr>
    <tbody>
        <?php
        if(!empty($dato)):
        foreach ($dato as $key => $value) 
            foreach ($value as $v):?>
        <tr>
            <td><?php echo $v['id']?></td>
            <td><?php echo $v['nombre']?></td>
            <td><?php echo $v['precio']?></td>
            
        </tr>
        <?php endforeach;?>
        <?php else: ?>
            <tr>
                <td colspan= "3"> no hay registro</td>
            </tr>
            <?php endif; ?>
    </tbody>
</table>
<?php
require_once("layout/footer.php");
?>

