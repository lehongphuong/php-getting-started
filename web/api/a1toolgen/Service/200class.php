<?php 
	switch ($data->what) { 
        //******************a1crud_class************************
        // a1crud_class(id,idproject,classname,properties,attributes,lengths)
        // Get all data from a1crud_class
        case 200: {
            $sql = "SELECT * FROM a1crud_class";
            break;
        }

        // Insert data to a1crud_class
        case 201: {
            $sql = "INSERT INTO a1crud_class(idproject,classname,properties,attributes,lengths)
            		VALUES('$data->idproject','$data->classname','$data->properties','$data->attributes','$data->lengths')"; 
            break;
        }

        // Update data a1crud_class
        case 202: {
            $sql = "UPDATE a1crud_class SET idproject='$data->idproject', classname='$data->classname', properties='$data->properties', attributes = '$data->attributes', lengths = '$data->lengths'
            		WHERE id='$data->id'";  
            break;
        }

        // Delete data of a1crud_class
        case 203: {
            $sql = "DELETE FROM a1crud_class
            		WHERE id IN($data->id)";
            break;
        }

        // Find data with id a1crud_class
        case 204: {
            $sql = "SELECT * FROM a1crud_class
            		WHERE id='$data->id'";
            break;
        }

        // Select with pagination(offset, number-item-in-page) a1crud_class
        case 205: {
            $sql = "SELECT * FROM a1crud_class
            		LIMIT $data->offset, $data->limit";
            break;
        }

        // Count number item of a1crud_class
        case 206: {
            $sql = "SELECT COUNT(1) AS count FROM a1crud_class ";
            break;
        }
		
		// Get all data from a1crud_class
        case 207: {
            $sql = "SELECT * FROM a1crud_class
					WHERE idproject = '$data->idproject' 
					ORDER BY id";
            break;
        }

	}
?> 
