var mysql = require('mysql')

    var con =mysql.createConnection({
       host: "localhost:3307",
       user: "root",
       password: "",
       database: "proyectosi2", 
    })
    con.connect(function(err){
       if(error){
        throw error;
       }else{
        console.log('conexion exitosa');
       }
    
    });
    con.end();
