function getBotResponse(input) {
    //rock paper scissors
    if (input == "rock") {
        return "paper";
    } else if (input == "paper") {
        return "scissors";
    } else if (input == "scissors") {
        return "rock";
    }

    // Simple responses
    if (input == "hello") {
        return "Hello there!";
    } else if (input =="bye") {
        return "Talk to you later!";
    } 
    else if (input == "I need Help") {
        return "Ask Me";
    }
    else if (input == "when will i get my order ") {
        return "Your order will be delivered within the day you placed";
    }else if (input == "Can I return My product") {
        return "If you dont like the product you must return it within 1 hour";
    }
    else if (input == "How are you?") {
        return "I'm Good ,How are you?";
    }else if (input == "good") {
        return "Nice to know";
    }else {
        return "Try asking something else!";
    }
}