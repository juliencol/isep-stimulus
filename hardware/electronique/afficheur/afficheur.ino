#define NB_COL  5
#define NB_LIG  7

int Col[] = {10,9,8,6,5};  // Numéro des broches connectées aux colonnes de l'afficheur
int Lig[] = {38,37,36,35,34,33,13};  // Numéro des broches connectées aux lignes de l'affficheur

int Motif1[] =   { 1,0,0,0,1,   // Définition d'une matrice binaire représentant le caractère 
                   0,1,0,1,0,   // à afficher
                   0,0,1,0,0,
                   0,1,0,1,0,
                   1,0,0,0,1,
                   0,0,0,0,0,
                   0,1,1,1,0};

void setup()
{
 int i;
  
  // ************ Initialisation des ports de commande de l'afficheur en sortie ************
for (i=0;i<NB_COL;i++)
    pinMode(Col[i], OUTPUT);
    
  for (i=0;i<NB_LIG;i++)
    pinMode(Lig[i], OUTPUT);
}


// Cet exemple permet d'illuminer la matrice de LED avec un motif prédéfini
// Le principe est d'allumer les LEDs les unes après les autres. La persistence rétinienne fait le reste
// Le symbole TEMP permet de visualiser le procédé (le mettre à 0 pour l'affichage final

#define TEMP  10

void loop()
{
  int i,j;
  
  for (i=0;i<NB_LIG;i++)
    {
    digitalWrite(Lig[i],LOW);  // Activation de la ligne i (les autres sont éteintes
    for(j=0;j<NB_COL;j++)
      {
      digitalWrite(Col[j],Motif1[i*NB_COL+j]);  // Selon le code défini par le motif allumage de la led 
      delay(TEMP);
      digitalWrite(Col[j],LOW);                // de la colonne j puis extinction
      }
    digitalWrite(Lig[i],HIGH); // désactivation de la ligne i avant passage à la ligne suivante
    } 
}
