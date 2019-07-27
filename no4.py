def count_vowels(kata):

    hidup=0

    for i in kata:
        if(i=='a' or i=='e' or i=='i' or i=='o' or i=='u' or i=='A' or i=='E' or i=='I' or i=='O' or i=='U'):
            hidup=hidup+1

    print("Jumlah huruf hidup: ", hidup)
    
    
count_vowels('hm...')