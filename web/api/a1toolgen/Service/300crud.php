<?php 
	switch ($data->what) { 
        //******************a1crud_crud************************
        // a1crud_crud(id,idproject,idclass,createdate,actiontype,titles,properties,alias,refers,titlecreate,titleupdate,inputtypes,validates,formats)
        // Get all data from a1crud_crud
        case 300: {
            $sql = "SELECT * FROM a1crud_crud";
            break;
        }

        // Insert data to a1crud_crud
        case 301: {
            $sql = "INSERT INTO a1crud_crud(idproject,idclass,createdate,actiontype,titles,properties,alias,refers,titlecreate,titleupdate,inputtypes,validates,formats)
            		VALUES('$data->idproject','$data->idclass','$data->createdate','$data->actiontype','$data->titles','$data->properties','$data->alias','$data->refers','$data->titlecreate','$data->titleupdate','$data->inputtypes','$data->validates','$data->formats')";
			break;
        }

        // Update data a1crud_crud
        case 302: {
            $sql = "UPDATE a1crud_crud SET idproject='$data->idproject', idclass='$data->idclass', createdate='$data->createdate', actiontype='$data->actiontype', titles='$data->titles', properties='$data->properties', alias='$data->alias', refers='$data->refers', titlecreate='$data->titlecreate', titleupdate='$data->titleupdate', inputtypes='$data->inputtypes', validates='$data->validates', formats = '$data->formats'
            		WHERE id='$data->id'";
            break;
        }

        // Delete data of a1crud_crud
        case 303: {
            $sql = "DELETE FROM a1crud_crud
            		WHERE id IN($data->id)";
            break;
        }

        // Find data with id a1crud_crud
        case 304: {
            $sql = "SELECT * FROM a1crud_crud
            		WHERE id='$data->id'";
            break;
        }

        // Select with pagination(offset, number-item-in-page) a1crud_crud
        case 305: {
            $sql = "SELECT * FROM a1crud_crud
            		LIMIT $data->offset, $data->limit";
            break;
        }

        // Count number item of a1crud_crud
        case 306: {
            $sql = "SELECT COUNT(1) FROM a1crud_crud ";
            break;
        }
		
		// Get all data from a1crud_crud
        case 307: {
            $sql = "SELECT * FROM a1crud_crud
					WHERE idproject = '$data->idproject' AND idclass = '$data->idclass' 
					ORDER BY id";
            break;
        }
		
		 // Insert data to a1crud_crud
        case 308: {
            $sql = "INSERT INTO a1crud_crud(idproject,idclass,createdate,actiontype,titles,properties,alias,refers,formats)
            		VALUES('$data->idproject','$data->idclass','$data->createdate','$data->actiontype','$data->titles','$data->properties','$data->alias','$data->refers','$data->formats')";
			break;
        }
		
		    // Update data a1crud_crud
        case 309: {
            $sql = "UPDATE a1crud_crud SET idproject='$data->idproject', idclass='$data->idclass', formats = '$data->formats'
            		WHERE id='$data->id'";
            break;
        }

	}
?> 
