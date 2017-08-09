<?php
	//**************************************************
	//filename: accounts_view_lang
	//Language: French (Quebec)
	//Translation by: Benjamin Canzani July 2017
	//**************************************************
	
	//IMPORTANT NOTES FOR TRANSLATORS:
	//0. For each line, do not change anything before the "=" sign.
	//1. Replace text inside "" (double quotes).
	//2. If you need to add double quotes on the text, do this: \" for each double quote you would like to enter.
	//3. if there's a link in the middle of the text, the sentence is split in:
	//	part 1: text before the link
	//	part 2: text of the link
	//	part 3: text after the link
	//4. do not leave trailing spaces on sentences
	//5. Keep sentences with one line only, even if very long.
	//6. If a line starts with // leave it that way.
	
	$lang['accounts_view_0000'] = "Comptes de paiement";
	//sentence with middle link:
	//first section:
	$lang['accounts_view_0001'] = "Promouvoir votre compte en ajoutant des utilisateurs. Vous pouvez aussi voir l'état de vos comptes existants (s'il y a lieu) sous le volet \"Current Accounts\".";
	//link text:
	$lang['accounts_view_0001_1'] = "Nous contacter";
	//last section:
	$lang['accounts_view_0001_2'] = "lorsque vous avez besoin d'aide pour promouvoir votre compte.";
	
	$lang['accounts_view_0002'] = "Ajouter le(s) item(s)";
	//$lang['accounts_view_0003'] = "Payer un développeur à l'heure";
	$lang['accounts_view_0004'] = "Comptes Actuels";
	$lang['accounts_view_0005'] = "Nom de l'Organisation:";
	$lang['accounts_view_0006'] = "Identifiant d'Organization:";
	$lang['accounts_view_0007'] = "Quota d'Utilisateurs Actuel:";
	$lang['accounts_view_0008'] = "(dont";
	//number is placed between these two entries
	$lang['accounts_view_0009'] = "sont présentement utilisés)";
	//table column names:
	$lang['accounts_view_0010'] = "Item";
	$lang['accounts_view_0011'] = "Ajouter";
	$lang['accounts_view_0012'] = "Unité";
	$lang['accounts_view_0013'] = "Prix Unitaire";
	//Payment options:
	$lang['accounts_view_0014'] = "Me facturer pour 1 mois des items sélectionnés ici-haut";
	$lang['accounts_view_0015'] = "Me facturer pour 3 mois des items sélectionnés ici-haut";
	$lang['accounts_view_0016'] = "***Me facturer pour 6 mois (3% de rabais sur les items sélectionnés ici-haut)";
	$lang['accounts_view_0017'] = "***Me facturer pour 1 an (8% de rabais sur les items sélectionnés ici-haut)";
	//shows if user submits form without choosing any option:
	$lang['accounts_view_0018'] = "Input Error: Aucune information saisie.";
	//bottom of the payment selection table:
	$lang['accounts_view_0019'] = "Escompte";
	$lang['accounts_view_0020'] = "Total";
	//button labels (at the end of the payment selection table). Make about same size of characters if possible:
	$lang['accounts_view_0021'] = "Réinitialiser";
	$lang['accounts_view_0022'] = "Passer à PayPal ->";
	
	//first section of instructions:
	$lang['accounts_view_0023'] = "Instructions";
	//Instructions text bullet line by bullet line:
	$lang['accounts_view_0024'] = "Ajouter les items dans le tableau à gauche. Les items ajoutés seront ajoutés à ceux dont vous possédez déjà.";
	$lang['accounts_view_0025'] = "Si vous ne voulez pas ajouter un item, laisse sa quanitié à 0.";
	$lang['accounts_view_0026'] = "Lorsque vous ajoutez/enlevez des items, le montant total est mis à jour en bas.";
	$lang['accounts_view_0027'] = "Cliquer sur le bouton Procéder lorsque vous avez terminé. Vous serez alors apportés à PayPal pour compléter votre paiement.";
	$lang['accounts_view_0028'] = "Les items ajoutés seront disponibles immédiatement après que le paiement soit confirmé.";
	//second section of instructions:
	$lang['accounts_view_0029'] = "Notes";
	//Instructions text bullet line by bullet line:
	$lang['accounts_view_0030'] = "Vous pouvez consulter l'état de votre compte en tout temps en basculant vers le volet \"Current Account\" sur cette page.";
	$lang['accounts_view_0031'] = "Ceci N'EST PAS une charge récurrente et vous ne serez PAS automatiquement facturés.";
	$lang['accounts_view_0032'] = "10 jours avant l'échéance de la facture, les utilisateurs abonnés recevront un courriel d'avertissement.";
	$lang['accounts_view_0033'] = "Lors de l'échéance de la facture, un autre courriel sera envoyé. Vous aurez de nouveau 10 jours de grâce pour renouveller votre paiement.";
	
	//sentence with middle link:
	//first section:
	$lang['accounts_view_0034'] = "Les courriels de renouvellement seront envoyés aux utilisateurs abonnés. Cet abonnement est fait par les administrateurs pour chaque utilisateur";
	//link text:
	$lang['accounts_view_0034_1'] = "Module de configuration des Utilisateurs";
	//last section:
	$lang['accounts_view_0034_2'] = ".";
	
	//sentence with middle link:
	//first section:
	$lang['accounts_view_0035'] = "Si aucun paiement n'est reçu après la période de grâce, les dernier utilisateurs inscrits seront automatiquement désactivés. Vous devrez alors aller dans";
	//link text:
	$lang['accounts_view_0035_1'] = "le Module de COnfiguration des Utilisateurs";
	//last section:
	$lang['accounts_view_0035_2'] = "pour gérer vos utilisateurs afin de compenser pour la diminution du quota.";
	
	$lang['accounts_view_0036'] = "Aucun remboursement. Si vous n'êtes pas certain, veuillez seulement payer 1 mois.";
	$lang['accounts_view_0037'] = "Vous pouvez rétrograder votre compte en laissant expirer vos options de paiement.";
	$lang['accounts_view_0038'] = "Mensuel, Trimestriel, Semestriel, et Annuel signifient des cycles de 31 jours, 3 x 31 = 93 jours, 6 x 31 = 186 jours and 12 x 31 = 372 jours respectivement.";
	$lang['accounts_view_0039'] = "Touts les prix sont en $US.";
	$lang['accounts_view_0040'] = "Contacter pour support/questions:";
	$lang['accounts_view_0041'] = "Touts transactions faits par le biais de PayPal. Nous nNavons aucun accès à vos informations bancaires.";
	$lang['accounts_view_0042'] = "Payer un développeur à l'heure";
	$lang['accounts_view_0043'] = "Nom de l'Organization:";
	$lang['accounts_view_0044'] = "Identifiant de l'Organization:";
	//shows if user submits form without choosing any option:
	$lang['accounts_view_0045'] = "Input Error: Aucune information saisie.";
	//table column names:
	$lang['accounts_view_0046'] = "Item";
	$lang['accounts_view_0047'] = "Ajouter";
	$lang['accounts_view_0048'] = "Unité";
	$lang['accounts_view_0049'] = "Prix Unitaire";
	$lang['accounts_view_0050'] = "Total";
	//button labels (at the end of the payment selection table). Make about same size of characters if possible:
	$lang['accounts_view_0051'] = "Réinitialiser";
	$lang['accounts_view_0052'] = "Passer à PayPal ->";
	$lang['accounts_view_0053'] = "Instructions";
	$lang['accounts_view_0054'] = "Nous n'acceptons les paiements à l'heure non-solicités. Si vous avez l'intention de demander un service à contrat, veuillez contacter le développeur avant d'acheter des heures.";
	$lang['accounts_view_0055'] = "Ajouter la quantité d'heures que vous désirez acheter au tableau à gauche.";
	$lang['accounts_view_0056'] = "Lorsque vous modifiez la quantité d'heures, le montant total sera mis à jour en bas.";
	$lang['accounts_view_0057'] = "Cliquer sur le bouton Procéder lorsque vous avez terminé. Vous serez alors apportés à PayPal pour compléter votre paiement.";
	$lang['accounts_view_0058'] = "Notes";
	$lang['accounts_view_0059'] = "Vous pouvez consulter l'état de votre compte et imprimer les factures en tout temps en basculant vers le volet \"Current Account\" sur cette page.";
	$lang['accounts_view_0060'] = "Ceci N'EST PAS une charge récurrente et vous ne serez PAS automatiquement facturés.";
	$lang['accounts_view_0061'] = "Aucun remboursement.";
	$lang['accounts_view_0062'] = "Touts les prix en $US.";
	$lang['accounts_view_0063'] = "Contacter pour support/questions:";
	$lang['accounts_view_0064'] = "Touts transactions faits par le biais de PayPal. Nous nNavons aucun accès à vos informations bancaires.";
	$lang['accounts_view_0065'] = "Comptes actuels";
	$lang['accounts_view_0066'] = "Identifiant de la facture";
	$lang['accounts_view_0067'] = "Date de la facture (GMT)";
	$lang['accounts_view_0068'] = "Date du paiement (GMT)";
	$lang['accounts_view_0069'] = "Valide jusqu'à (GMT)";
	$lang['accounts_view_0070'] = "État actuel";
	$lang['accounts_view_0071'] = "Escompte";
	$lang['accounts_view_0072'] = "Total";
	$lang['accounts_view_0073'] = "Renouveller";
	$lang['accounts_view_0074'] = "aucune transaction enregistrée";
	$lang['accounts_view_0075'] = "ooops! Mauvais identifiant de facture.";
	$lang['accounts_view_0076'] = "Achat Annulé.";
	$lang['accounts_view_0077'] = "Qu'aimeriez-vous faire maintenant?";
	$lang['accounts_view_0078'] = "Retour vers la page des comptes";
	$lang['accounts_view_0079'] = "Basculer vers le tableau de bord";
	$lang['accounts_view_0080'] = "Merci pour votre paiement.";
	$lang['accounts_view_0081'] = "Une erreur s'est produite. Veuillez eonvoyer un courriel à info@commacmms.com avec une decription de l'erreur.";
	$lang['accounts_view_0082'] = "Qu'aimeriez-vous faire maintenant?";
	$lang['accounts_view_0083'] = "Retour vers la page des comptes";
	$lang['accounts_view_0084'] = "Basculer vers le tableau de bord";
	$lang['accounts_view_0085'] = "Une erreur s'est produite. Veuillez eonvoyer un courriel à info@commacmms.com avec une decription de l'erreur.";
	$lang['accounts_view_0086'] = "Qu'aimeriez-vous faire maintenant?";
	$lang['accounts_view_0087'] = "Retour vers la page des comptes";
	$lang['accounts_view_0088'] = "Basculer vers le tableau de bord";
?>