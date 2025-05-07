<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250505131112 extends AbstractMigration
{
    public function getDescription(): string
    {
        return
            '
                1. List of English Q-codes.
            ';
    }

    public function up(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            INSERT INTO english_qcode (id, code, description) VALUES
            (1, "QAZ", "Storm, turning off the station"),
            (2, "QHL", "Scanning the band from the highest frequency"),
            (3, "QHM", "Scanning the band from the highest to the middle frequency"),
            (4, "QLH", "Scanning the band from the lowest frequency"),
            (5, "QLM", "Scanning the band from the lowest to the middle frequency"),
            (6, "QMH", "Scanning the band from the middle to the highest frequency"),
            (7, "QML", "Scanning the band from the middle to the lowest frequency"),
            (8, "QQQ", "I must interrupt communication, explanations will follow later"),
            (9, "QRA", "My station is called..."),
            (10, "QRAR", "My address in the callbook is accurate and correct"),
            (11, "QRB", "The distance between our stations is ... km"),
            (12, "QRD", "We are heading to... from..."),
            (13, "QRE", "We expect to arrive at ... at ..."),
            (14, "QRF", "We are returning (or you should return) to ... (location)"),
            (15, "QRG", "Your frequency is..."),
            (16, "QRH", "Your frequency is changing, fluctuating"),
            (17, "QRI", "Your tone is: 1. good, 2. variable, 3. bad"),
            (18, "QRJ", "Your signals are very weak, unreadable"),
            (19, "QRK", "The readability of your signals is (1...5)"),
            (20, "QRL", "I am busy, please do not disturb"),
            (21, "QRM", "I have interference from other stations"),
            (22, "QRN", "I have atmospheric interference"),
            (23, "QRO", "Increase power, high power"),
            (24, "QRP", "Decrease power, low power"),
            (25, "QRQ", "Transmit faster"),
            (26, "QRR", "I am ready for automatic operation"),
            (27, "QRRR", "Land distress signal (for amateur use only)"),
            (28, "QRS", "Transmit slower"),
            (29, "QRT", "I am stopping transmission, turning off the station, cease transmission!"),
            (30, "QRU", "I have nothing for you"),
            (31, "QRV", "I am ready to operate"),
            (32, "QRW", "Tell ..., that I am calling them on frequency ..."),
            (33, "QRX", "Please wait, I will call you at ..."),
            (34, "QRY", "Your turn is..."),
            (35, "QRZ", "You are being called by..., who is calling me?"),
            (36, "QSA", "The strength of your signals is (1...9)"),
            (37, "QSB", "The strength of your signal fluctuates"),
            (38, "QSD", "You are transmitting CW incorrectly"),
            (39, "QSI", "I could not interrupt your transmission"),
            (40, "QSK", "I can listen during breaks in transmission (BK)"),
            (41, "QSL", "I confirm, I will send a QSL card"),
            (42, "QSLL", "Let's exchange our QSL cards"),
            (43, "QSLN", "No need to send a QSL card"),
            (44, "QSM", "Please repeat (RPT)"),
            (45, "QSN", "I heard you on ... kHz"),
            (46, "QSO", "Contact, I have a connection"),
            (47, "QSP", "Relay the message to..."),
            (48, "QSQ", "Transmit each word once"),
            (49, "QSR", "Repeat your call on the calling frequency"),
            (50, "QSS", "We want to use working frequency ..."),
            (51, "QST", "Message for everyone"),
            (52, "QSU", "Transmit on frequency ... kHz"),
            (53, "QSUF", "Please establish a wired telephone connection"),
            (54, "QSV", "Transmit V for tuning"),
            (55, "QSW", "I am switching to frequency..."),
            (56, "QSX", "I am listening on frequency..."),
            (57, "QSY", "Switch to frequency..."),
            (58, "QSZ", "Transmit each word twice (or ... times)"),
            (59, "QTA", "Cancel telegram no... as if it were not sent"),
            (60, "QTB", "I disagree with your word count calculation"),
            (61, "QTC", "I have a message for you"),
            (62, "QTG", "We will transmit two dashes after our call sign, each lasting 10 seconds"),
            (63, "QTH", "My geographical location is..."),
            (64, "QTN", "We departed from that location at ..."),
            (65, "QTR", "The exact time is..."),
            (66, "QTS", "We will transmit our call signal for measurements for ... minutes"),
            (67, "QTT", "The recognition signal that follows is superimposed on another transmission"),
            (68, "QTU", "I am operating from ... to ..."),
            (69, "QTV", "Monitor for us on frequency ... (from ... to ... hours)"),
            (70, "QTX", "We will be on standby for further communication with you"),
            (71, "QUA", "I am relaying a message from ..."),
            (72, "QUB", "Here are the requested messages ..."),
            (73, "QUH", "The barometric pressure is ..."),
            (74, "QUM", "I can now resume normal operation"),
            (75, "QWX", "Weather condition")
        SQL);
    }

    public function down(Schema $schema): void
    {
        $this->addSql(<<<'SQL'
            DELETE FROM english_qcode WHERE id BETWEEN 1 AND 75
        SQL);
    }
}
