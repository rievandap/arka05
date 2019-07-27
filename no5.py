def sort(data):
    ordered = []
    i = 0
    x=data
    lowest=x[0]
    
    while len(x) > 0:
        if  ord(x[i]) < ord(lowest):
            lowest = x[i]
        i += 1
        if i == len(x):
            ordered.append(lowest)
            x.remove(lowest)
            if x:
              lowest = x[0]
            i = 0

    print(ordered)

data=['a','g','b','w','l','f','d','g']
sort(data)