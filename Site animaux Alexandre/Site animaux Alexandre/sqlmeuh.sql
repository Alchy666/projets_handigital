#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: refuge
#------------------------------------------------------------

CREATE TABLE refuge(
        id_ref      Int  Auto_increment  NOT NULL ,
        nom_ref     Varchar (30) NOT NULL ,
        adresse_ref Varchar (50) NOT NULL ,
        ville_ref   Varchar (3) NOT NULL ,
        cp_ref      Varchar (6) NOT NULL ,
        place_ref   Int NOT NULL
	,CONSTRAINT refuge_PK PRIMARY KEY (id_ref)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: admin
#------------------------------------------------------------

CREATE TABLE admin(
        id_admin  Int  Auto_increment  NOT NULL ,
        login_adm Varchar (30) NOT NULL ,
        mdp_adm   Varchar (30) NOT NULL
	,CONSTRAINT admin_PK PRIMARY KEY (id_admin)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: client
#------------------------------------------------------------

CREATE TABLE client(
        id_cli      Int  Auto_increment  NOT NULL ,
        nom_cli     Varchar (30) NOT NULL ,
        prenom_cli  Varchar (30) NOT NULL ,
        adresse_cli Varchar (30) NOT NULL ,
        ville_cli   Varchar (30) NOT NULL ,
        mail_cli    Varchar (30) NOT NULL ,
        enfant_cli  Bool NOT NULL ,
        login_cli   Varchar (30) NOT NULL ,
        mdp_cli     Varchar (30) NOT NULL
	,CONSTRAINT client_PK PRIMARY KEY (id_cli)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: animal
#------------------------------------------------------------

CREATE TABLE animal(
        id_ani          Int  Auto_increment  NOT NULL ,
        nom_ani         Varchar (30) NOT NULL ,
        race_ani        Varchar (30) NOT NULL ,
        age_ani         Int NOT NULL ,
        sexe_ani        Bool NOT NULL ,
        img_ani         Varchar (30) NOT NULL ,
        desc_ani        Varchar (500) NOT NULL ,
        enfant_ani      Int NOT NULL ,
        dateaccueil_ani Date NOT NULL ,
        dateadopt_ani   Date ,
        id_cli          Int ,
        id_ref          Int
	,CONSTRAINT animal_PK PRIMARY KEY (id_ani)

	,CONSTRAINT animal_client_FK FOREIGN KEY (id_cli) REFERENCES client(id_cli)
	,CONSTRAINT animal_refuge0_FK FOREIGN KEY (id_ref) REFERENCES refuge(id_ref)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commenter
#------------------------------------------------------------

CREATE TABLE commenter(
        id_cli      Int NOT NULL ,
        id_ani      Int NOT NULL ,
        date_com    Date NOT NULL ,
        contenu_com Varchar (500) NOT NULL
	,CONSTRAINT commenter_PK PRIMARY KEY (id_cli,id_ani)

	,CONSTRAINT commenter_client_FK FOREIGN KEY (id_cli) REFERENCES client(id_cli)
	,CONSTRAINT commenter_animal0_FK FOREIGN KEY (id_ani) REFERENCES animal(id_ani)
)ENGINE=InnoDB;

