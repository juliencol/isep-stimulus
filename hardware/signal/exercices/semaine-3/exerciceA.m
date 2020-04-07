% Variables
f0 = 440; % fréquence
T0 = 1 / f0; % période
Fe1 = 8000; % fréquence d'échantillonnage
Te1 = 1 / Fe1; % période d'échantillonnage
A = 1;

t = (1:N) / Fe1; % axe temps
N = length(t); % nb d'échantillons
axe_freq = (0:N-1) * Fe1 / N;

% 
sinus = A * sin(2 * pi * f0 * t);

% Plot
plot(sinus);