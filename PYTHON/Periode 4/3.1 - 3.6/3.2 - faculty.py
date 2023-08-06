# Python 3.2 - Faculty

grootte = int(input("Geef mij een getal waarvan ik de faculteit moet berekenen: "))

faculty = 1

for i in range(1, grootte+1):
    faculty = faculty * i
    
print(faculty)
    
    
    