import math
class books:
    bookList=[]
    def __init__(self,name,price,writer,amount):
        if price < 0:
            raise ValueError("قیمت واقعی وارد کنید")
        if amount < 0:
            raise ValueError("تعداد واقعی وارد کنید")
        self.name=name
        self.price=price
        self.writer=writer
        self.amount=amount
        mydict={"name": name,"price": price,"writer": writer,"amount": amount,"math" : math.sqrt(price),"total_value": price*amount}
        books.bookList.append(mydict)
        self.index1=0
    def __iter__(self):
        return self
    def __next__(self):
        if books.index < len(books.bookList):
            book = books.bookList
            self.index1+=1
            return book

book_1 = books("vaghti niche gerist",1000000,"niche(nemidonam)",1)
book_1 = books("ghabreston",800000,"mmd",11)
book_1 = books("mavad",1500000,"sina",5)
with open("bookfile.txt","w") as file:
    for book in books.bookList:
        file.write(f"name: {book['name']}|writer: {book['writer']}|price: {book['price']}|amount: {book['amount']}|math: {book['math']}|total_value: {book['total_value']}\n")
