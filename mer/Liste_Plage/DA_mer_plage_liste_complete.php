<?php

$insert ="INSERT INTO $nom_table1(lieux,villes,liens,distances,actions,note_moyenne,votre_avis) 
VALUES
('Ayguade','Hyères','https://www.hyeres-tourisme.com/equipement-loisir/plage-de-layguade/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Almanarre Nord','Hyères','https://www.hyeres-tourisme.com/equipement-loisir/plage-de-lalmanarre/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('La Bergerie','Hyères','https://www.hyeres-tourisme.com/equipement-loisir/plage-de-la-bergerie/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Les Salins','Hyères','https://www.hyeres-tourisme.com/equipement-loisir/plage-des-salins/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Gigaro','La Croix-Valmer','https://www.plages.tv/detail/plage-de-gigaro-la-croix-valmer-83420','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('La Douane / Le Débarquement','La Croix-Valmer','https://www.plages.tv/detail/plage-du-debarquement-la-croix-valmer-83420','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('L’Argentière','La Londe-les-Maures','https://www.mpmtourisme.com/loisir/plage-argentiere','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Miramar','La Londe-les-Maures','https://www.mpmtourisme.com/loisir/plage-miramar','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Tamaris','La Londe-les-Maures','https://www.mpmtourisme.com/loisir/plage-tamaris','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Sablettes','La-Seyne-sur-Mer','https://www.plages.tv/detail/plage-des-sablettes-mar-vivo-la-seyne-sur-mer-83500','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Aiguebelle','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-daiguebelle/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Anglade','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-de-langlade/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Cavalière','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-de-cavaliere/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('la Fossette','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-de-la-fossette/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Lavandou ville','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-du-centre-ville/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Pramousquier','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-de-pramousquier/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Saint Clair','Le Lavandou','https://www.ot-lelavandou.fr/le-lavandou/les-12-plages-du-lavandou/plage-de-saint-clair/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Les Bonnettes','Le Pradet','http://www.lepradet-tourisme.fr/fr/fiche/plage-des-bonnettes/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('La Garonne','Le Pradet','http://www.lepradet-tourisme.fr/fr/fiche/plage-de-la-garonne/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Le Monaco','Le Pradet','http://www.lepradet-tourisme.fr/fr/fiche/plage-du-monaco/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Les Oursinières','Le Pradet','http://www.lepradet-tourisme.fr/fr/fiche/plage-des-oursinieres/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Canadel','Rayol-Canadel-sur-Mer','https://www.plages.tv/detail/plage-1-rayol-canadel-sur-mer-83820','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Pramousquier Est','Rayol-Canadel-sur-Mer','https://www.plages.tv/detail/plage-de-pramousquier-rayol-canadel-sur-mer-83820','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Rayol','Rayol-Canadel-sur-Mer','https://www.plages.tv/detail/plage-2-rayol-canadel-sur-mer-83820','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('La Madrague','Saint-Cyr-sur-Mer','https://www.saintcyrsurmer.com/incontournables/les-plages/la-plage-de-la-madrague/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Les Lecques Saint Come Ouest','Saint-Cyr-sur-Mer','https://www.saintcyrsurmer.com/incontournables/les-plages/la-plage-des-lecques/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('La Coudoulière','Saint-Mandrier-sur-Mer','https://www.plages.tv/detail/plage-de-la-coudouliere-saint-mandrier-sur-mer-83430','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('La Vieille','Saint-Mandrier-sur-Mer','https://www.plages.tv/detail/plage-de-la-vieille-saint-mandrier-sur-mer-83430','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Touring','Saint-Mandrier-sur-Mer','https://www.plages.tv/detail/plage-touring-saint-mandrier-sur-mer-83430','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Le Canon','Saint-Mandrier-sur-Mer','https://www.plages.tv/detail/plage-du-canon-saint-mandrier-sur-mer-83430','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Péguière','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-de-la-peguiere-4778909/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Veillat','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-du-veillat-4778925/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Arène Grosse','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-d-arene-grosse-4778587/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Boulouris','Saint-Raphaël','https://www.saint-raphael.com/fr/saint-raphael/ville/les-quartiers/boulouris','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Dramont','Saint-Raphaël','https://www.esterel-cotedazur.com/decouvrir/plages/plage-du-debarquement/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Camp Long','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-du-camp-long-4778734/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Agay','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-d-agay-4778548/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Pourousset','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-du-pourrousset-4778998/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Baumette','Saint-Raphaël','https://www.saint-raphael.com/fr/loisirs/plage-de-la-baumette-4778895/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Anthéor','Saint-Raphaël','https://www.esterel-cotedazur.com/decouvrir/plages/plage-antheor/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Garonnette','Sainte-Maxime','https://www.sainte-maxime.com/fr/loisirs/plage-de-la-garonnette-4613684/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('La Croisette','Sainte-Maxime','https://www.sainte-maxime.com/fr/loisirs/plage-de-la-croisette-4813159/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('La Nartelle','Sainte-Maxime','https://www.sainte-maxime.com/fr/loisirs/autres-loisirs/sainte-maxime/plage-de-la-nartelle-4613688/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Centre-ville','Sainte-Maxime','https://www.sainte-maxime.com/fr/loisirs/plage-du-centre-ville-4613690/','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Bonnegrace Kennedy','Six-Fours-Les-Plages','https://www.gralon.net/tourisme/plages-france/plage-plage-bonnegrace-kennedy-poste-de-secours-2916.htm','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Le Cros','Six-Fours-Les-Plages','https://www.plages.tv/detail/plage-du-cros-six-fours-les-plages-83140','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('La Coudouliere','Six-Fours-Les-Plages','https://www.plages.tv/detail/plage-de-la-coudouliere-six-fours-les-plages-83140','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Les Roches Brunes','Six-Fours-Les-Plages','https://www.plages.tv/detail/plage-des-roches-brunes-six-fours-les-plages-83140','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Mistral','Toulon','https://www.plages.tv/detail/plage-du-mourillon-anse-les-pins-de-la-source-mistral-et-lido--toulon-83000','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Plage des Pins','Toulon','https://www.plages.tv/detail/plage-du-mourillon-anse-les-pins-de-la-source-mistral-et-lido--toulon-83000','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Plage du Lido','Toulon','https://www.plages.tv/detail/plage-du-mourillon-anse-les-pins-de-la-source-mistral-et-lido--toulon-83000','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png'),
('Plage de la Source','Toulon','https://www.plages.tv/detail/plage-du-mourillon-anse-les-pins-de-la-source-mistral-et-lido--toulon-83000','km','Pavillon bleu','img/DauphinBleu.png','img/DauphinGris.png')
";

$connexion->exec($insert);

/*$insert2 ="INSERT INTO $nom_table2(textes) 
VALUES
('commentaire avec un insert dans le code')
";

$connexion->exec($insert2);*/

?>