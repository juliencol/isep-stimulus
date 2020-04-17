/*
  DigitalReadSerial with on-board Pushbutton
  Reads a digital input on pin 5, prints the result to the serial monitor 
 
  Harware Required:
  * MSP-EXP430G2 LaunchPad
  
  This example code is in the public domain.
 */
 

// digital pin 5 has a pushbutton attached to it. Give it a name:
int pushButton = 17;
int ledSens=39;
int randNum=random(1000,10000);
#define ledSens RED_LED

// the setup routine runs once when you press reset:
void setup() {
  // initialize serial communication at 9600 bits per second:
  Serial.begin(9600); // msp430g2231 must use 4800
  // make the on-board pushbutton's pin an input pullup:
  pinMode(pushButton, INPUT_PULLUP);
  pinMode(ledSens, OUTPUT);
  //time_t t1 = now();
}

// the loop routine runs over and over again forever:
void loop(){
  // read the input pin:
  int buttonState = digitalRead(pushButton);
  Serial.println(buttonState);   
    delay(randNum); 
    digitalWrite(ledSens,HIGH);
    int time1 = millis(); 
    
  if(buttonState==0)
    digitalWrite(ledSens,LOW);
    int time2 = millis();
  
  // print out the state of the button:
  int result = time2 - time1;
  Serial.println(result + "!");
  
 
  
  // delay in between reads for stability
}



