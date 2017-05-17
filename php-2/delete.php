<?php
/**
 * Created by PhpStorm.
 * User: jeremiebergel
 * Date: 16/05/2017
 * Time: 13:27
 */


include_once 'dbconfig.php';

if(isset($_POST['btn-del']))
{
    $id = $_GET['id'];
    $crud->delete($id);
    header("Location: delete.php?deleted");
}

?>

    <div class="clearfix"></div>

    <div class="container">

        <?php
        if(isset($_GET['deleted']))
        {
            ?>
            <div class="alert alert-success">
                <strong>Success!</strong> record was deleted...
            </div>
            <?php
        }
        else
        {
            ?>
            <div class="alert alert-danger">
                <strong>Sure !</strong> to remove the following record ?
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
            <table class='table table-bordered'>
                <tr>
                    <th>Number</th>
                    <th>Date</th>
                    <th>Image</th>
                    <th>Region</th>
                </tr>
                <?php
                $stmt = $bdd->prepare("SELECT * FROM journals WHERE id=:id");
                $stmt->execute(array(":id"=>$_GET['id']));
                while($row=$stmt->fetch(PDO::FETCH_BOTH))
                {
                    ?>
                    <tr>
                        <td><?php print($row['id']); ?></td>
                        <td><?php print($row['number']); ?></td>
                        <td><?php print($row['date']); ?></td>
                        <td><?php print($row['img']); ?></td>
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
            <button class="btn btn-large btn-primary" type="submit" name="btn-del">YES</button>
            <a href="index.php" class="btn btn-large btn-success">NO</a>
        </form>
        <?php
        }
        else
        {
            ?>
            <a href="index.php" class="btn btn-large btn-success"> &nbsp; Back to index</a>
            <?php
        }
        ?>
        </p>
    </div>
