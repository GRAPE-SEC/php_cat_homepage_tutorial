characters = 'abcdefghijklmnopqrstuvwxyz'

for c1 in characters:
    for c2 in characters:
        for c3 in characters:
            for c4 in characters:
                for c5 in characters:
                    gen = ''.join([c1, c2, c3, c4, c5])
                    print(gen)