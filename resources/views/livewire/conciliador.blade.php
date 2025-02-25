<div class="space-y-4">
    <flux:card class="flex justify-between items-center">
        <div>
            <flux:heading size="xl" level="1">Devprod Conciliador</flux:heading>

            <flux:subheading size="lg" class="text-justify">
                Uma aplicação web integrada ao sistema ERP WinThor by TOTVS, projetada para importar e conciliar automaticamente as principais cobranças emitidas na frente de caixa do varejo.
            </flux:subheading>

            <flux:button class="mt-6" variant="primary" icon-trailing="phone">Fale Conosco</flux:button>
        </div>
        <flux:separator vertical class="mx-10"/>
        <div>
            <img src="{{ asset('imagens/desdobrarAlerta.png') }}" alt="Desdobrar SitefGW" class="rounded-xl shadow-2xl">
        </div>
    </flux:card>

    <div class="grid grid-cols-12 gap-4">
        <flux:card class="col-span-4 !bg-transparent !border-transparent">
            <flux:heading size="lg">Processo Automatizado</flux:heading>
            <flux:subheading class="text-justify" size="md">
                A aplicação do Devprod Conciliador é uma solução voltada para automação dos processos no setor financeiro, oferecendo funcionalidades abrangentes para otimizar as operações de desdobramento e conciliação com segurança e eficiência.
            </flux:subheading>
        </flux:card>

        <flux:card class="col-span-4">
            <flux:heading size="xl">Fechamentos Diários</flux:heading>

            <flux:subheading size="md" class="text-justify">
                Nossa aplicação processa, em média, 30.000 cobranças diariamente com uma precisão de 99%, garantindo eficiência e confiabilidade nas operações financeiras.
            </flux:subheading>
        </flux:card>

        <flux:card class="col-span-4">
            <flux:heading size="xl">Atendimento Especializado</flux:heading>

            <flux:subheading size="md" class="text-justify">
                Contamos com uma equipe de suporte altamente capacitada para resolver dúvidas e oferecer assistência de forma personalizada, garantindo o máximo aproveitamento da solução.
            </flux:subheading>
        </flux:card>
    </div>

    <div class="grid grid-cols-12 gap-4">
        <flux:card class="col-span-5">
            <flux:field class="space-y-4">
                <flux:legend>Fale Conosco</flux:legend>
                <flux:input wire:model="nome" label="Nome" required/>
                <flux:input wire:model="cnpj" label="CNPJ" mask="99.999.999/9999-99" required/>
                <flux:input wire:model="email" label="Email" type="email" required/>
                <flux:input wire:model="telefone" label="Telefone" mask="(99) 99999-9999" class="mb-4" required/>
                <flux:button variant="primary" icon-trailing="check" class="w-full">Enviar</flux:button>
            </flux:field>
        </flux:card>

        <flux:card class="col-span-7">
            <flux:field class="space-y-4">
                <flux:legend>Perguntas Frequentes</flux:legend>
                <flux:accordion transition>
                    <flux:accordion.item expanded>
                        <flux:accordion.heading>Qual é a política de reembolso?</flux:accordion.heading>
                        <flux:accordion.content>
                            Oferecemos garantia de devolução do dinheiro em até 30 dias após a compra, caso não fique satisfeito com a solução. Entre em contato com o suporte para assistência.
                        </flux:accordion.content>
                    </flux:accordion.item>

                    <flux:accordion.item expanded>
                        <flux:accordion.heading>Oferecem descontos para compras em volume?</flux:accordion.heading>
                        <flux:accordion.content>
                            Sim, temos descontos especiais para pedidos em grande quantidade. Consulte nossa equipe de vendas para mais detalhes.
                        </flux:accordion.content>
                    </flux:accordion.item>

                    <flux:accordion.item expanded>
                        <flux:accordion.heading>Como acompanhar meu pedido?</flux:accordion.heading>
                        <flux:accordion.content>
                            Após o envio do pedido, você receberá um email com o número de rastreamento. Use esse número para acompanhar o status no nosso site.
                        </flux:accordion.content>
                    </flux:accordion.item>

                    <flux:accordion.item expanded>
                        <flux:accordion.heading>É possível personalizar a aplicação?</flux:accordion.heading>
                        <flux:accordion.content>
                            Sim, realizamos personalizações para atender às necessidades específicas do seu negócio. Entre em contato conosco para saber mais.
                        </flux:accordion.content>
                    </flux:accordion.item>
                </flux:accordion>
            </flux:field>
        </flux:card>
    </div>
</div>
