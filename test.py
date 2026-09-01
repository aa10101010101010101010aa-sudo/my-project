import random

choices = ["سنگ", "کاغذ", "قیچی"]

print("🎮 بازی سنگ کاغذ قیچی")
print("برای خروج، exit را وارد کن.")

while True:
    player = input("\nانتخاب تو (سنگ/کاغذ/قیچی): ").strip()

    if player == "exit":
        print("بازی تمام شد!")
        break

    if player not in choices:
        print("انتخاب نامعتبره! یکی از سنگ، کاغذ یا قیچی رو وارد کن.")
        continue

    computer = random.choice(choices)
    print(f"انتخاب کامپیوتر: {computer}")

    if player == computer:
        print("مساوی شد!")
    elif (
        (player == "سنگ" and computer == "قیچی")
        or (player == "کاغذ" and computer == "سنگ")
        or (player == "قیچی" and computer == "کاغذ")
    ):
        print("بردی! 🎉")
    else:
        print("باختی! کامپیوتر برد.")
