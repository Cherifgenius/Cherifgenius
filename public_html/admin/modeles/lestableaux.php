<?php

class Tableau {
	public $admin = array('id','personne','identifiant','password');
public $annonces = array('id','produit','date','reduction','active','bloque','lancepage','id_produiit');
public $bonlivraison = array('id','client','produit','adresse','quantitelivre','quantiterestant','dateheure','moyenlivraison','fraislivraison','livreur/societe','tempslivraison','poids','valide');
public $clients = array('id','personne','identifiant','password','compteurcon','important');
public $commande = array('id','produit','client','dateheure','prix','quantite','idpanier');
public $commentairecli = array('id','client','commentaire','produit','reponse');
public $payement = array('id','commandeligne','montant','devise','modalite','client','dateheure','idrecu');
public $personne = array('id','nom','prenom','contact','adresse','sexe','adresse_email');
public $produits = array('id','designation','genre','marque','poids','codebar','description','ingredient','prix','image','image2','image3',);
public $recommandation = array('id','produit','client','dateheure','description');
public $stocks = array('id','produit','prixu','quantite','emplacement','classe','date','dateexp');
public $tracabiite = array('id','clients','ip','zone','terminal','dateheureconn','dateheuredeconn','operation');
public $vente = array('id','commande','dateheure','livraison');
public $commentaire = array('id','nomcomplet','email','contact','commentaire','dateheure','idproduit');
}

?>