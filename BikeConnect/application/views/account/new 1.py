class AITDataStruct:
    mydatastruct=None
    def __init__(self):
        self.mydatastruct = []
    def printdatastruct(self,type):
        if type=="Stack":
            print([x for x in self.mydatastruct[::-1]])     
        elif type=="Queue":
            print([x for x in self.mydatastruct])  
class MyStack(AITDataStruct):
    def push(self, item):
         self.mydatastruct.append(item)
    def pop(self):
        if len(self.mydatastruct) > 0:
            self.mydatastruct.pop() 
class MyQueue(AITDataStruct):
    def enq(self, item):
         self.mydatastruct.append(item)
    def deq(self):
        if len(self.mydatastruct) > 0:
            self.mydatastruct.pop(0) 
ds1=MyStack()
ds1.push("d")
ds1.push("c")
ds1.push("b")
ds1.push("a")       
ds1.pop()
ds1.printdatastruct("Stack")
             