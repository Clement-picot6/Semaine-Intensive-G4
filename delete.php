<?php
/**
 * Created by PhpStorm.
 * User: jeremiebergel
 * Date: 16/05/2017
 * Time: 13:27
 */


include_once 'php/dbconfig.php';
include_once 'header-bo.php';
if(isset($_POST['btn-del']))
{
    $id = $_GET['id'];
    $crud->delete($id);
    header("Location: delete.php?deleted");
}

?>
   <main id="bo" class="delete">
    <div class="clearfix request">

    <div class="container">

        <?php
        if(isset($_GET['deleted']))
        {
            ?>
            <div class="alert alert-success">
                <p>Success record was deleted...</p>
            </div>
            <?php
        }
        else
        {
            ?>
            <div class="alert alert-danger">
                <p>Sure to remove the following record ?</p>
            </div>
            <?php
        }
        ?>
    </div>

    <div class="clearfix"></div>

    <div class="container">

        <?php
        if(isset($_GET['id']))
        {
            ?>
            <table class='table' border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <th>NUMBER</th>
                    <th>RÉGION</th>
                </tr>
                <?php
                $stmt = $bdd->prepare("SELECT `number`, `region` FROM journals WHERE id=:id");
                $stmt->execute(array(":id"=>$_GET['id']));
                while($row=$stmt->fetch(PDO::FETCH_BOTH))
                {
                    ?>
                    <tr>
                        <td><?php print($row['number']); ?></td>
                        <td><?php print($row['region']); ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <?php
        }
        ?>
    </div>
    <div class="container">
        <p>
            <?php
        if(isset($_GET['id']))
        {
            ?>
            <form method="post">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                <button class="btn-yes" type="submit" name="btn-del">YES</button>
                <button class="btn-no"><a href="backoffice.php">NO</a></button>
            </form>
            <?php
        }
        ?>
        </p>
    </div>
    </div>
   </main>
