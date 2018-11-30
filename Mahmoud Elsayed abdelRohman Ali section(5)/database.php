<?php
    class database
   
    {
         
        function __construct()
        {
            $this->pdo=new PDO("mysql:host=localhost;charset=utf8","root","");//connection
             $this->Execute("create database if not exists train");
            $this->Execute("use train");
            
        }
        public function disconnect()
        {
            $this->pdo=null;
        }
        public function getRow($q,$p)
        {
            $stmt=$this->pdo->prepare($q);
            $stmt->execute($p);
            return $stmt->fetch();
        }
        public function getCount($q,$p=array())
        {
            $stmt=$this->pdo->prepare($q);
            $stmt->execute($p);
            return $stmt->rowCount();
        }
        public function getRows($q,$p=array())
        {
            $stmt=$this->pdo->prepare($q);
            $stmt->execute($p);
            return $stmt->fetchAll();
        }
        public function getObject($q,$p=array())
        {
            $stmt=$this->pdo->prepare($q);
            $stmt->execute($p);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function insertRow($q,$p)
        {
            $stmt=$this->pdo->prepare($q);
            $stmt->execute($p);
            return $stmt->rowCount();
        }
        public function update($q,$p)
        {
            return $this->insertRow($q,$p);
        }
        public function delete($q,$p)
        {
            return $this->insertRow($q,$p);
        }
        public function Execute($q)
        {
            return $this->pdo->exec($q);
        }
        
             
    }
    $db=new database();//intializeconstructor to connect the db
    $db->Execute("create database if not exists train");
    $db->Execute("use train");
    $db->Execute("create table if not EXISTS book(
     train_id int(4)  primary key auto_increment,
     depar_station varchar(50) not null,
     depar_time time not null,
     arriv_station  varchar(50) not null,
     arriv_time  time not null,
     train_type varchar(30) not null
     )"); //(depar_station,depar_time,arriv_station,arriv_time,train_type) (depar_station,depar_time,arriv_station,arriv_time,train_type) (depar_station,depar_time,arriv_station,arriv_time,train_type) values 
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Qena','4:30:00','Giza','24:00:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'sohag','5:30:00','Giza','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'cairo','19:30:00','alexandria','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Giza','19:30:00','cairo','20:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'miniya','19:30:00','cairo','24:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'aswan','3:30:00','miniya','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'sohag','2:30:00','alexandria','24:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'assuit','19:30:00','alexandria','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Beni_suef','15:30:00','qena','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'miniya','19:30:00','beni_suef','21:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'assuit','18:30:00','Beni_suef','24:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'miniya','11:30:00','alexandria','24:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Beni_suef','19:30:00','cairo','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Beni_suef','17:30:00','Qena','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'sohag','19:30:00','Beni_suef','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'assuit','12:30:00','Beni_suef','18:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Beni_suef','19:30:00','aswan','22:30:00','vip')");    
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Beni_suef','19:30:00','sohag','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'El-sharkia','2:30:00','sohag','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'assuit','12:30:00','El-sharkia','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'sohag','19:30:00','El-sharkia','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Qena','11:30:00','alexandria','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Qena','19:30:00','Giza','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'louxor','19:30:00','alexandria','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'louxor','19:30:00','Giza','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'alexandria','3:30:00','aswan','24:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'sohag','11:30:00','Banha','24:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'assuit','11:30:00','Banha','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ('Qena','3:30:00','port_saied','24:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'cairo','19:30:00','Banha','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'aswan','15:30:00','miniya','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Banha','19:30:00','El-ismailia','20:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'sohag','19:30:00','Beni_suef','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Beni_suef','19:30:00','Banha','23:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'louxor','12:30:00','miniya','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Qena','12:30:00','Banha','24:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Beni_suef','12:30:00','sohag','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Banha','19:30:00','tanta','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'El-zagazig','19:30:00','tanta','24:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'assuit','12:30:00','El-zagazig','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'louxor','1:30:00','Banha','24:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Qena','11:30:00','El-zagazig','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'aswan','19:30:00','Banha','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'port-saied','11:30:00','sohag','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'el-ismalia','12:30:00','qena','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Banaha','16:30:00','miniya','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'tanta','15:30:00','sohag','23:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'tanta','12:30:00','aswan','24:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Giza','19:30:00','El-zagazig','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'cairo','19:30:00','tanta','24:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'louxor','1:30:00','el-ismalia','24:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'assuit','16:30:00','port-saied','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'cairo','19:30:00','el-ismalia','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Qena','19:30:00','Banha','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Banha','12:30:00','Beni_suef','20:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'el-ismalia','19:30:00','Giza','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'miniya','19:30:00','port-saied','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'assuit','11:30:00','tanta','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'port-saied','12:30:00','sohag','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'cairo','19:30:00','El-Behira','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'assuit','12:30:00','El-Behira','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'sohag','10:30:00','El-Behira','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Qena','8:30:00','El-Behira','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'miniya','4:30:00','El-Behira','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'El-Behira','20:30:00','Giza','24:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'El-Behira','12:30:00','Beni_suef','20:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'El-Behira','19:30:00','alexandria','21:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'El-Behira','11:30:00','aswan','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Bnaha','19:30:00','El-Behira','23:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'tanta','18:30:00','El-Behira','23:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'Beni_suef','19:30:00','El-Behira','22:30:00','vip')");
    $db->Execute("insert into book (depar_station,depar_time,arriv_station,arriv_time,train_type) values ( 'sohag','19:30:00','El-Behira','22:30:00','vip')"); 
    
?>


