f1 = 1440;
f2 = 2000;
D = 100;
fe = 8000;
Te = 1 / fe;
t = -0.05:Te:0.05;
N = length(t);
f = (0:N - 1) * (fe / N);

x1 = sin(2 * pi * f1 * t);
x2 = sin(2 * pi * f2 * t);
y = 20 * log(abs(fft(x1 .* x2)));


subplot(2, 1, 1)
plot(f, y);
