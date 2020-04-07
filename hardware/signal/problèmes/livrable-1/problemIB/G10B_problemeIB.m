fe = 16000; % frequence d'echantillonage
te = 1/fe;

e1 = 130;
e2 = 4000;

f1 = e1 + (e2-e1) * rand(1); % frequence 1 aleatoire
f2= e1 + (e2-e1) * rand(1);  % frequence 2 aleatoire
n1 = fe/f1; % nombre 1 d'echantillons
t1 = 1:n1;
n2 = fe/f2; % nombre 1 d'echantillons
t2 = 1:n2;

if (n1 >= n2) % permet de determiner le plus grand, pour etre sur la meme echelle de grandeur
    t = t1;
else
    t = t2;
end

A1 = 1 + (100 - 1) * rand(1); % amplitude 1 aleatoire
A2 = 1 + (100 - 1) * rand(1); % amplitude 2 aleatoire
phase1 = 1 + (10 - 1) * rand(1); % dephasage 1 aleatoire
phase2 = 1 + (10 - 1) * rand(1); %dephasage 2 aleatoire

a = A1 * cos(2 * pi * f1 * t + phase1); % signal 1
b = A2 * cos(2 * pi * f2 * t + phase2); % signal 2
a1 = a / norm(a); 
b1 = b / norm(b);

subplot(311);
plot(t, a);
title('Les deux signaux')
hold on
plot(t, b);
hold off;

[corr decalage] = xcorr(a, b);
subplot(312);
plot([corr decalage]);
title('Intercorrelation')

[corr1 decalage1] = xcorr(a1, b1);
subplot(313);
plot(corr1);
title ('intercorrelation normee')



if (max(abs(corr1) >= 0.7)) % retourne 1 si les signaux ont la meme frequence (avec une marge d'erreur de 0.3) (valeur de 1 idealement s'ils ont la meme frequence)
    valeur = 1;
    msg='Les signaux ont la meme frequence';
else 
    valeur = 0; % retourne 0 si pas meme frequence
    msg = 'Les signaux n ont pas la meme frequence';
end
valeur
msg