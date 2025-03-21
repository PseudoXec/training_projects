# arduino_rgb
Simple Combinational Logic using TinkerCad

# Components Used
Arduino Uno
Breadboard
LEDs (Red, Green, Blue, Yellow, Magenta, Cyan, White, and Black/Off)
Three push buttons (switches)
Resistors (220Ω - 1kΩ)
Jumper wires

# Wiring and Setup

The three switches are connected to digital input pins with pull-up resistors enabled.
Each LED is connected to an individual digital output pin.
A common ground is shared between the LEDs, switches, and Arduino board.

# How it Works

The three switches determine which LED lights up based on their on/off state, following a combinational logic approach.

- If no switches are pressed (all are OFF), the circuit assumes a black/off state, meaning no LED lights up.
- Pressing only Switch 1 turns on the red LED.
- Pressing only Switch 2 turns on the green LED.
- Pressing only Switch 3 turns on the blue LED.
- Pressing Switch 1 and Switch 2 together activates the yellow LED, which is a mix of red and green.
- Pressing Switch 1 and Switch 3 together activates the magenta LED, which is a mix of red and blue.
- Pressing Switch 2 and Switch 3 together activates the cyan LED, which is a mix of green and blue.
- Pressing all three switches at the same time activates the white LED, which is a combination of red, green, and blue.
