# Python 2.4 - Spel uitslag

player1 = input("Geef mij de score van speler 1: ")
player2 = input("Geef mij de score van speler 2: ")

if player1 < player2:
    print("Speler 1 heeft gewonnen!")
elif player2 < player1:
    print("Speler 2 heeft gewonnen!")
else:
    print("Speler 1 en speler 2 staan gelijk spel!")