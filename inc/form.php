                <form action="tack.php" method="post">
                    <p><label for="namn">Namn:</label> 
                        <input type="text" id="namn" name="namn" placeholder="Erik.." pattern="^[a-zA-ZåäöÅÄÖ]+$" required/></p>
                    <p><label for="e-mail">E-post:</label> 
                        <input type="text" id="e-mail" name="e-mail" placeholder="demo@demo.se" required/></p>
                    <p><label for="mobil">Mobil:</label> 
                        <input type="text" id="mobil" name="mobil" pattern="\d{3}-\d{7}" maxlength="11" size="11" title="073-6589652"/></p>
                    <p><label for="subjekt">Ämne:</label> 
                        <input type="text" id="subjekt" name="subjekt" placeholder="min dator..." required/></p>
                    <p><label for="message">Meddelande:</label> 
                        <textarea id="message" name="message" placeholder="Beskriv här....." required></textarea></p>
                    <p><label for="captcha">reCapcha: 5+6?</label> 
                        <input type="text" id="captcha" name="captcha" placeholder="Skriv svaret..."/></p>
                    <input id="submit" name="submit" type="submit" value="Skicka">
                </form>