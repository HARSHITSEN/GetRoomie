class BankAccount:
    def __init__(self, account_number, account_holder_name):
        self.account_number = account_number
        self.account_holder_name = account_holder_name
        self.balance = 0

    def deposit(self, amount):
        self.balance += amount

    def withdraw(self, amount):
        if amount <= self.balance:
            self.balance -= amount
            
        else:
            print("Insufficient funds")

    def get_account_number(self):
        return self.account_number

    def get_account_holder_name(self):
        return self.account_holder_name

    def get_balance(self):
        return self.balance


class BankingSystem:
    def __init__(self):
        self.accounts = []
        self.account_counter = 1

    def generate_account_number(self):
        account_number = self.account_counter
        self.account_counter += 1
        return account_number

    def create_account(self, account_holder_name):
        account_number = self.generate_account_number()
        account = BankAccount(account_number, account_holder_name)
        self.accounts.append(account)
        print("Account created successfully.")

    def get_account(self, account_number):
        for account in self.accounts:
            if account.get_account_number() == account_number:
                return account
        return None

    def deposit(self, account_number, amount):
        account = self.get_account(account_number)
        if account:
            account.deposit(amount)
            print("Amount deposited successfully.")
        else:
            print("Account not found.")

    def withdraw(self, account_number, amount):
        account = self.get_account(account_number)
        if account:
            account.withdraw(amount)
            print("Amount withdrawn successfully.")
        else:
            print("Account not found.")

    def get_balance(self, account_number):
        account = self.get_account(account_number)
        if account:
            return account.get_balance()
        else:
            print("Account not found.")

banking_system = BankingSystem()

# Create new accounts
banking_system.create_account("Harshit sen")
# banking_system.create_account("mayank sen")
banking_system.deposit(1, 500) 
banking_system.deposit(2, 1000)  
banking_system.withdraw(1, 200)   
banking_system.withdraw(2, 1500) 
balance = banking_system.get_balance(1) 
print("Account balance:", balance)
