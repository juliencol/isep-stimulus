% x : vecteur représentant le signal audio 
% fe : fréquence d'échantillonnage du signal

% Echantillonnage et définition des paramètres
[x, fe] = audioread('BonneJournee.wav'); 
n = length(x); % taille du vecteur signal
t = (0:n - 1) / fe; % temps i.e. abscisse des représentations graphiques
p = zeros(1, n); % puissance instantanée

% Implémentation de la puissance instantanée du signal
for k = 1:n  
    p(k) = x(k)^2;
end

% Définition de paremètres pour les fenêtres glissantes
l = 1000;  % largeur de la fenêtre 
tAmbient = 50; % durée du bruit ambiant au début (en ms)
nAmbient = 50 * fe * 0.001; % nombre de points échantillonnés pendant le bruit ambiant
m = zeros(1, n); % moyenne des puissances instantanées

% Implémentation de la moyenne des puissances instantanées
for k = nAmbient:n - l + 1 
    h = k:(l + k - 1);   
    m(k) = mean(p(h));  
end   

% Implémentation de la moyenne avec les valeurs restantes
for k = n - l + 1:n
   h = k:n;
   m(k) = mean(p(h));
end

T = (0:n - 1) / fe;

subplot(1, 2, 1);
% graphe de la puissance instantanée brute
plot(t, p);
xlabel('Temps (s)');
ylabel('Puissance instantanée brute (W)');
title('Puissance instantanée du signal audio');
subplot(1, 2, 2)

% graphe de la puissance instantanée lissée
plot(T, m);         
xlabel('Temps (s)');
ylabel('Puissance instantanée lissée (W)');
title('Détection de signal audio');

seuil = mean(p(1:nAmbient)) * 2; % modulation de facteur 2
over = find(m > seuil); % on récupère les index de toutes les valeurs de M qui dépassent le seuil 

boolean = zeros(size(m));           
boolean(over) = max(m) / 2;  %

hold on
subplot(1, 2 ,2)
plot(T, boolean, 'r') % affiche en rouge l'indicateur boolean de bruit ou pas sur le graphe de la puissance lissée