
                
<label>
    Provincia    
    <?php
        include "clase_db";
        $db = new Db("localhost","root","","test");
        $provincias = $db->listado("Select * from provincias ");
        if ($provincias) {
            echo "<select id='provincia' name='provincia'>";
            echo "<option></option>";
                foreach ($provincias as $provincias) 
                        echo "<option value=".$provincia['id_provincia'].">".$provincia['provincia']."</option>";
            echo "</select>";
        } else echo "<select disabled><option></option></select>";
    ?>
</label>
</div>