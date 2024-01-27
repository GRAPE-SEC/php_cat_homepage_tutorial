
def checker(guess,answer):
    if(guess==answer):
        print(f"Cracked! : {guess}")
        return True
    else:
        print(f"try : {guess}")
        return False

def buster_2char(target,characters):      
    for c1 in characters:
        for c2 in characters:
                gen = ''.join([c1, c2])
                if(checker(gen,target)):
                        return

buster_2char('bg','abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890')