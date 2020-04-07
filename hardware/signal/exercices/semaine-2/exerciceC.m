[x0,Fe] = audioread('..\audio\Flute.wav');

x0 = x0';

Te = 1/Fe;

N = length(x0);

t = (0:N-1)/Fe;

figure; subplot(3,1,1); plot(t,x0); xlabel 's'; ylabel 'Amplitude'

title 'Time analysis'