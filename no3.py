def cetak_gambar(panjang):

    lebar=panjang
    m=(lebar-1)/2
    l=(panjang-1)

    for brs in range(lebar):
        for kol in range(panjang):
            if (kol==0 or kol==l or (brs==m and (kol>0 and kol<l))):
                print ("*", end=" ")
            else:
                print("=", end=" ")
        print()

cetak_gambar(11)