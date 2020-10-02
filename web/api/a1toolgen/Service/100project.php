<?php 
	switch ($data->what) { 
        //******************a1crud_project************************
        // a1crud_project(id,name,createdate)
        // Get all data from a1crud_project
        case 100: {
            $sql = "SELECT * FROM a1crud_project ORDER BY id";
            break;
        }

        // Insert data to a1crud_project
        case 101: {
            $sql = "INSERT INTO a1crud_project(name,createdate)
            		VALUES('$data->name','$data->createdate')";
            break;
        }

        // Update data a1crud_project
        case 102: {
            $sql = "UPDATE a1crud_project SET name='$data->name', createdate = '$data->createdate'
            		WHERE id='$data->id'";
            break;
        }

        // Delete data of a1crud_project
        case 103: {
            $sql = "DELETE FROM a1crud_project
            		WHERE id IN($data->id)";
            break;
        }

        // Find data with id a1crud_project
        case 104: {
            $sql = "SELECT * FROM a1crud_project
            		WHERE id='$data->id'";
            break;
        }

        // Select with pagination(offset, number-item-in-page) a1crud_project
        case 105: {
            $sql = "SELECT * FROM a1crud_project
            		LIMIT $data->offset, $data->limit";
            break;
        }

        // Count number item of a1crud_project
        case 106: {
            $sql = "SELECT COUNT(1) AS count FROM a1crud_project ";
            break;
        }
		
		// Get all data from a1crud_project
        case 107: {
			if ( $data->id==0){
				$sql = "SELECT * FROM a1crud_project ORDER BY id";
			}
			else {
				$sql = "SELECT * FROM a1crud_project
					WHERE a1crud_project.id = '$data->id'
					ORDER BY id";
			}
            break;
        }

	}
?> 
